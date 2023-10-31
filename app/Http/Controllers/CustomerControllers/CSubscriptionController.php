<?php

namespace App\Http\Controllers\CustomerControllers;

use App\Models\Subscription;
use Encore\Admin\Controllers\AdminController;

use Illuminate\Support\Facades\Auth;

class CSubscriptionController extends AdminController
{

    public function subscriptions()
     {
        $user_id= Auth::guard('customer')->user()->id;
        //dd ($user_id);
        $subscriptions =Subscription::where('user_id',$user_id)->where('package_type','1')->get();
        // dd($subscriptions);
        return view('customer-cp.subscriptions.index',compact('subscriptions'));
    }

}
