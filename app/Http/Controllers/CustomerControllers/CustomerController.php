<?php

namespace App\Http\Controllers\CustomerControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use App\Models\CustomerCv;
use App\Models\Subscription;
use Encore\Admin\Form\Builder;
use Illuminate\Contracts\Database\Query\Builder as QueryBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class CustomerController extends Controller
{
    public function dashboard(){

        $user_id=Auth::guard('customer')->user()->id;
        $allcvs =CustomerCv::where('customer_id',$user_id)->count();
        // dd($allcvs);
        // dd (count(CustomerCv::where('customer_id',$user_id)->where('views','>','0')->get()));
        $subscription=Subscription::where('user_id',$user_id)->where('status','1')->first();
        if(count(CustomerCv::where('customer_id',$user_id)->where('views','>','0')->get())>=1)
        {
            $cvs =CustomerCv::where('customer_id',$user_id)->where('views','>','0')->orderByDesc('views')->take(3)->get();

            return view('customer-cp.cvs.viewdmyCV',compact('cvs','subscription','allcvs'));
        }

        // dd ($subscription);
        $cvs =CustomerCv::where('customer_id',$user_id)->orderBy('created_at')->take(3)->get();
        return view('customer-cp.pages.home',compact('cvs','subscription','allcvs'));
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
        $cvs =CustomerCv::where('customer_id',$user_id)->where('views','>','0')->get();
        $allcvs =CustomerCv::where('customer_id',$user_id)->count();
        $subscription=Subscription::where('user_id',$user_id)->where('status','1')->first();
        return view('customer-cp.cvs.viewdmyCV',compact('cvs','allcvs','subscription'));
    }


}
