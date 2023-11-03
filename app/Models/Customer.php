<?php

namespace App\Models;

use App\Services\CVService;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_phone',
        'address',
        'company_name',
        'avatar',
        'username',
        'password',
        'remember_token',
        'signed_up_with',
        'customer_type'
    ];

    public function subscription()
    {
        return $this->hasMany('App\Models\CustomerSubscription', 'user_id');
    }

    public function cv()
    {
        return $this->hasMany('App\Models\CustomerCv', 'customer_id');
    }

    public function customer_cv()
    {
        return $this->hasMany('App\Models\CustomerCv', 'customer_id');
    }

    public function invoice()
    {
        return $this->hasMany('App\Models\Invoice', 'customer_id');
    }

    public function syncCV($cv_id)
    {
        CustomerCv::where('id', $cv_id)->update(['customer_id' => $this->id]);
    }

    public function has_active_subscription()
    {
        $check_res = Subscription::where('user_id', $this->id)->where('status', 1)->whereDate('end_date', '>=', Carbon::today())->count();
        if ($check_res) return true;
        else return false;
    }

    public function getActiveSubscription()
    {
        return $this->subscription()->where('status', 1)->whereDate('end_date', '>=', Carbon::today()->format('Y-m-d H:i:s'))->first();
    }

    public function getCountCVsRelatedToActiveSubscription($subscription_id)
    {
        return CustomerCv::where('customer_id', $this->id)->where('subscription_id', $subscription_id)
            ->count();
    }

    public function exceeded_subscription_limit()
    {
        //get Active Subscription
        //max limits of package
        //number of created cvs related to this subscription
        $active_subscription = $this->getActiveSubscription();
        if ($active_subscription != null) {
            $max_limits = $active_subscription->max_cv_limit;
            $count_created_cvs = $this->getCountCVsRelatedToActiveSubscription($active_subscription->id);
            if ($max_limits > $count_created_cvs) {
                return false;
            } else {
                return true;
            }
        }
        return true;
    }

    public function getLatestStoredCV($subscription_id)
    {
        if ($subscription_id == 0) {
            $cv = CustomerCv::where('customer_id', $this->id)
                ->where('cv_status', 0)->where('subscription_id', 0)->latest()->first();
        } else {
            $cv = CustomerCv::where('customer_id', $this->id)
                ->where('stopped_on_step', '<', 8)->where('subscription_id', $subscription_id)->latest()->first();
        }
        if ($cv != null && !empty(session('chosen_cv_color'))) {
            $cv->template_color = session('chosen_cv_color');
            $cv->save();
        }
        return $cv;
    }

    public function deleteFakedCVs()
    {
        $cvs = CustomerCv::where('customer_id', $this->id)
            ->where('cv_status', 0)->where('subscription_id', 0)->get();
        foreach ($cvs as $cv){
            if(CVService::deleteAllRelatedDataToCV($cv)){
                $cv->delete();
            }
        }
    }
    public function deleteLatestFakeAttemptCreatedCV($current_cv_id){
        $cv = CustomerCv::where('customer_id', $this->id)
            ->where('id','!=',$current_cv_id)
            ->where('cv_status', 0)->where('subscription_id', 0)->first();
        if(CVService::deleteAllRelatedDataToCV($cv)){
            $cv->delete();
        }
    }
}
