<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Customer  extends Authenticatable
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
    public function subscription(){
        return $this->hasMany('App\Models\CustomerSubscription','user_id');
    }
    public function cv(){
        return $this->hasMany('App\Models\CustomerCv','customer_id');
    }
    public function customer_cv(){
        return $this->hasMany('App\Models\CustomerCv','customer_id');
    }
    public function invoice(){
        return $this->hasMany('App\Models\Invoice','customer_id');
    }
    public function syncCV($cv_id){
        CustomerCv::where('id',$cv_id)->update(['customer_id'=>$this->id]);
    }
    public function has_active_subscription(){
        $check_res=Subscription::where('user_id',$this->id)->where('status',1)->whereDate('end_date','<',Carbon::today())->count();
        if($check_res) return true;
        else return false;
    }
    public function getActiveSubscription(){
        return $this->subscription()->where('status',1)->whereDate('end_date','>=',Carbon::today()->format('Y-m-d H:i:s'))->first();
    }
    public function getCountCVsRelatedToActiveSubscription($subscription_id){
        return CustomerCv::where('customer_id',$this->id)->where('subscription_id',$subscription_id)
            ->count();
    }
    public function is_exceeded_subscription_limit(){
        //get Active Subscription
        //max limits of package
        //number of created cvs related to this subscription
        $active_subscription=$this->getActiveSubscription();
        if($active_subscription!=null){
            $max_limits=$active_subscription->max_cv_limit;
            $count_created_cvs=$this->getCountCVsRelatedToActiveSubscription($active_subscription->id);
            if($max_limits>$count_created_cvs){
                return false;
            }else{
                return true;
            }
        }
        return true;
    }
}
