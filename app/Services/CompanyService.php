<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class CompanyService
{
    public static function canSubscribeToNewPackage(){
        $subscription= Auth::guard('company')->user()->getActiveSubscription();
        if($subscription!=null){
            if ($subscription->current_cv_count < $subscription->max_cv_limit) {
                return false;
            }
        }
        return true;
    }
}
