<?php

namespace App\Http\Controllers;

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
}
