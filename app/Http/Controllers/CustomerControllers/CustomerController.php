<?php

namespace App\Http\Controllers\CustomerControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use App\Models\CustomerCv;
use App\Models\Subscription;
use App\Models\View;
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
        $subscription=Subscription::where('user_id',$user_id)->where('status','1')->first();
        $cvs =CustomerCv::where('customer_id',$user_id)->orderBy('updated_at','desc')->take(3)->get();
        $customer_views=View::select('views.cv_id','views.company_id','how_often')
            ->join('customer_cvs','customer_cvs.id','views.cv_id')
            ->where('customer_cvs.customer_id','=',$user_id)
            ->get();
        return view('customer-cp.pages.home',compact('cvs','subscription','allcvs','customer_views'));
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
            'first_name'    => ['required', 'string', 'max:255'],
            'last_name'     => ['required', 'string', 'max:255'],
            'username'      => ['required', 'string', 'max:255', Rule::unique('customers')->ignore($customer->id),],
            'email'         => ['required', 'string', 'email', 'max:255', Rule::unique('customers')->ignore($customer->id),],
            'password'      => ['confirmed', Password::defaults()],
            ]
        );

        if($request->file('avatar')){
            $file= $request->file('avatar');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('files/images/'), $filename);
            $validated['avatar']= $filename;}
        if(isset($validated['password']))
        $validated['password']=Hash::make($request['password']);
        $customer->update($validated);
        return redirect()->route('customer.myprofile');
     }

     public function viewedmyCV(){
        $user_id=Auth::guard('customer')->user()->id;
        $customer_views=View::select('views.cv_id','views.company_id','how_often')
         ->join('customer_cvs','customer_cvs.id','views.cv_id')
         ->where('customer_cvs.customer_id','=',$user_id)
            ->get();
        return view('customer-cp.cvs.views',compact('customer_views','user_id'));
    }
}
