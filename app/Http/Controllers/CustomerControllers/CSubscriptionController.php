<?php

namespace App\Http\Controllers\CustomerControllers;

use App\Models\Package;
use App\Models\Subscription;
use Encore\Admin\Controllers\AdminController;

use Illuminate\Support\Facades\Auth;

class CSubscriptionController extends AdminController
{

    public function subscriptions()
     {
        $user_id= Auth::guard('customer')->user()->id;
        $currentsubscription=Subscription::where('user_id',$user_id)->where('package_type','1')->where('status','1')->first();
        // dd ($currentsubscription);
        $subscriptions =Subscription::where('user_id',$user_id)->where('package_type','1')->get();
        // dd($subscriptions);
        return view('customer-cp.subscriptions.index',compact('subscriptions','currentsubscription'));
    }

    public function showsubscription(Subscription $subscription)
    {
        $user_id= Auth::guard('customer')->user()->id;
        //dd ($user_id);
        return view('customer-cp.subscriptions.show',compact('subscription'));
    }

     public function newsubscription()
      {
         dd('hi');
         $user_id= Auth::guard('customer')->user()->id;
         $packages =Package::where('type','1')->get();
         dd($packages);
         return view('customer-cp.subscriptions.new',compact('packages'));
     }
}
