<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\CustomerCv;
use App\Models\CustomerCvSkill;
use App\Models\CustomerCvWorkHistory;
use App\Models\JobTitle;
use App\Models\Skill;
use App\Providers\RouteServiceProvider;
use App\Services\CVService;
use FontLib\Table\Type\name;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class CompanyController extends Controller
{
    public function getLoginForm(){
        return view('auth.login');
    }
    public function doLogin(Request $request){
        // dd('hi company');
        try{
            $credentials=$request->only(['email','password']);
            if(auth()->guard('companies')->attempt($credentials)){
//                $request->authenticate();
                $request->session()->regenerate();
                return redirect()->route('company.dashboard');
            }
            return redirect()->intended(RouteServiceProvider::HOME);
        }catch (\Exception $exception){
            return redirect()->back()->withErrors(['msg' =>$exception->getMessage()]);
        }
    }
    public function logout(){
        Session::flush();Auth::guard('company')->logout();
        return redirect()->route('home_page');
    }
    public function dashboard(){
        return view('company-cp.dashboard');
    }

    public function CVs(){
        // $cvs='';
        return view('company-cp.find_cv');
    }

    public function search(Request $request){
        // dd($request->jobtitle);
        if($jobtitle=JobTitle::where('id',$request->jobtitle)->first())
        {
        $jobtitlear=$jobtitle->name_ar;
        $jobtitleen=$jobtitle->name_en;}
        // else $jobtitle=$jobtitlear='';
        $name=$request->name;
        $amount=$request->amount;
        // dd($request);
        // dd($jobtitlear);
        // $cvs=CustomerCv::wherehas('customer_cv_work_history',function($q) use($jobtitle){
        //     $q->where('job_title_en', 'like', $jobtitle);
        //     return $q;})->get();




            $cvs=CustomerCv::latest();
            if($name)
            $cvs=$cvs->where(DB::raw("concat(first_name, ' ', surename)"), 'LIKE', "%".$name."%");
        // dd($cvs->get());
            if($jobtitle)
        $cvs=$cvs->where(function ($query) use($jobtitleen , $jobtitlear){
            $query->wherehas('customer_cv_work_history',function($q) use($jobtitleen){
                $q->where('job_title_en', 'like', $jobtitleen);
                return $q;});
                if($jobtitlear){
                        $query->orwherehas('customer_cv_work_history',function($q) use ($jobtitlear){
                            $q->where('job_title_ar', 'like', $jobtitlear);
                        return $q;});}
            return $query;});
            if($request->skillid)
                {$skills=$request->skillid;
                $cvs=$cvs->wherehas('customer_cv_skill',function($q) use ($skills) {
                        $q->whereIn('skill_id', $skills);
                    return $q;
                });}


                $cvs=$cvs->take($amount)->paginate(10);
                // dd ($cvs);
            // dd ($cvs);
    //     $cvs=CustomerCv::where(function ($query) use($jobtitle , $jobtitlear){
    //     $query->wherehas('customer_cv_work_history',function($jobtitle){
    //         $q=CustomerCvWorkHistory::where('job_title_en', 'like', $jobtitle);
    //         // dd($q);
    //     return $q;});
    //     if($jobtitlear){
    //     $query->orwherehas('customer_cv_work_history',function($jobtitlear){
    //         $q=CustomerCvWorkHistory::where('job_title_ar', 'like', $jobtitlear);
    //     return $q;});}
    //     return $query;
    // })->wherehas('customer_cv_skill',function($skills){
    //         $q=CustomerCvSkill::where('skill_id', 'in', $skills);
    //     return $q;

    // })->get();
        // dd($cvs);
        return view('company-cp.find_cv',compact('cvs'));
    }

    public function profile(){
        return view('company-cp.profile');
    }

    public function update_profile (Request $request)
     {
        // dd($request);
        $company=Auth::guard('company')->user();
        if($request['password']=='')
        unset($request['password']);
        $validated=$request->validate([
            'company_name'  => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', Rule::unique('customers')->ignore($company->id),],
            'address'       => ['required', 'string', 'max:255'],
            'contact_phone' => ['required', 'string', 'max:255'],
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
        $company->update($validated);
        return redirect()->route('company.profile');
     }

    public function chat(){
        return view('company-cp.chat');
    }
}
