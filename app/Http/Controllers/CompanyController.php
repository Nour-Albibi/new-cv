<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Services\CVService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    public function getLoginForm(){
        return view('auth.login');
    }
    public function doLogin(Request $request){
        dd('hi company');
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
    public function subscriptions(){
        return view('company-cp.subscriptions');
    }
    public function CVs(){
        return view('company-cp.find_cv');
    }
    public function profile(){
        return view('company-cp.profile');
    }
    public function chat(){
        return view('company-cp.chat');
    }
}
