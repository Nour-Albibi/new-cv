<?php

namespace App\Services;

use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;

class CustomerService
{
    public static function canCreateCV()
    {
        $check_subscription = Subscription::where('user_id', Auth::guard('customer')->user()->id)
            ->where('status', 1)->first();
        if (!empty($check_subscription)) {
            if ($check_subscription->current_cv_count < $check_subscription->max_cv_limit) {
                return true;
            }
        }
    }
    public static function canSubscribeToNewPackage(){
        $subscription= Auth::guard('customer')->user()->getActiveSubscription();
        if($subscription!=null){
            if ($subscription->current_cv_count < $subscription->max_cv_limit) {
                return false;
            }
        }
        return true;
    }
    public static function increaseCVCountInActiveSubscription(){
        $subscription= Auth::guard('customer')->user()->getActiveSubscription();
        $subscription->current_cv_count+=1;
        $subscription->save();
    }
}
