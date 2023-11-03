<?php

namespace App\Http\Controllers\CustomerControllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\CustomerCv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function dashboard(){

        $user_id=Auth::guard('customer')->user()->id;
        //dd ($user_id);
        $cvs =CustomerCv::where('customer_id',$user_id)->get();
        return view('customer-cp.pages.home',compact('cvs'));
    }

    public function edit(Customer $customer){

        $user_id=Auth::guard('customer')->user()->id;

        return view('customer-cp.pages.profile',compact('customer'));
    }
}
