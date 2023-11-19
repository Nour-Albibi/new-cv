<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\CustomerCv;
use App\Models\Subscription;
use App\Models\View;
use App\Providers\RouteServiceProvider;
use App\Services\CVService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user_id=Auth::guard('company')->user()->id;
        $last_find_cvs=View::where('company_id',$user_id)->get();
        $subscription=Subscription::where('user_id',$user_id)->where('status','1')->first();
        return view('company-cp.dashboard',compact('last_find_cvs','subscription'));
    }

    public function CVs(){
        $cvs=CustomerCv::select('first_name','first_name_ar','surename','surename_ar','phone','email','image','open_for_remote',
            'linkedlin_url','country_ar','country_en');
        return view('company-cp.find_cv',compact('cvs'));
    }

    public function search(Request $request){
        $cvs=CustomerCv::wherehas();
        dd($request);
    }
    public function profile(){
        return view('company-cp.profile');
    }

    public function update_profile (Request $request)
     {
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
    public function PreviewCVinPage(CustomerCv $cv){
        $cvFileName=$cv->template->file_name;
        return view('cv-templates.'.$cvFileName,['cv' => $cv]);
    }
    public function DownloadCV(CustomerCv $cv){
        try{
            CVService::addNewCompanyView(Auth::guard('company')->user()->id,$cv->id);
            $cvFileName=$cv->template->file_name;
            $pdf = Pdf::loadView('cv-templates.'.$cvFileName.'_pdf',['cv' => $cv]);
            return $pdf->download('CV.pdf');
        }catch (\Exception $exception){
            return redirect()->back()->withErrors(['msg' =>$exception->getMessage()]);
        }

    }
}
