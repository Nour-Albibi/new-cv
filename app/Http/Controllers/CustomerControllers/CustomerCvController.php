<?php

namespace App\Http\Controllers\CustomerControllers;

use App\Http\Controllers\Controller;
use App\Models\CustomerCv;
use Illuminate\Support\Facades\Auth;

class CustomerCvController extends Controller
{
    public function cvs()
    {
        $user_id=Auth::guard('customer')->user()->id;
        $cvs =CustomerCv::where('customer_id',$user_id)
            ->where('subscription_id','!=',0)->orderBy('created_at','desc')->paginate(10);

        return view('customer-cp.cvs.index',compact('cvs','user_id'));
   }

}
