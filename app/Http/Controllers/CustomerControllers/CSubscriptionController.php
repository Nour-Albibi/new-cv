<?php

namespace App\Http\Controllers\CustomerControllers;

use App\Admin\Extensions\Tools\AddCSubscription;
use App\Admin\Extensions\Tools\AddCustomerSubscription;
use App\Models\Customer;
use App\Models\CustomerSubscription;
use App\Models\Package;
use App\Models\Subscription;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;

class CSubscriptionController extends AdminController
{

    public function cvs()
     {
        $user_id= Auth::guard('customer')->user()->id;
        //dd ($user_id);
        $cvs =CV::where('user_id',$user_id)->where('package_type','1')->get();
        // dd($subscriptions);
        return view('customer-cp.subscriptions.index',compact('subscriptions'));
    }

}
