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
}
