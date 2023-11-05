<?php

namespace App\Http\Controllers\CustomerControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use App\Models\CustomerCv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class CustomerController extends Controller
{
    public function dashboard(){

        $user_id=Auth::guard('customer')->user()->id;
        //dd ($user_id);

        $cvs =CustomerCv::where('customer_id',$user_id)->orderBy('created_at')->take(3)->get();
        return view('customer-cp.pages.home',compact('cvs'));
    }

    public function profile(){

        $user_id=Auth::guard('customer')->user()->id;

        return view('customer-cp.pages.profile',compact('user_id'));
    }

     public function update_profile (Request $request)
     {
        $customer=Auth::guard('customer')->user();
        if($request['password']=='')
        unset($request['password']);
        $validated=$request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', Rule::unique('customers')->ignore($customer->id),],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('customers')->ignore($customer->id),],
            'password' => ['confirmed', Password::defaults()]]
        );
        $validated['password']=Hash::make($request['password']);
        $customer->update($validated);
        return redirect()->route('customer.myprofile');
     }
     public function viewedmyCV(){

        $user_id=Auth::guard('customer')->user()->id;
        $cvs =CustomerCv::where('customer_id',$user_id)->get();
        return view('customer-cp.pages.viewdmyCV',compact('cvs'));
    }
}
