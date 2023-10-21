<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Customer;
use App\Providers\RouteServiceProvider;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    //
    public function getSignupForm(){
        return view('auth.signup');
    }
    public function doSignup(Request $request){
        try{
            $request->validate([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'max:255', 'unique:'.Customer::class],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Customer::class],
                'password' => ['required', 'confirmed', Password::defaults()]]
            );
            if(AuthService::createCustomerAndAutoLogin($request->all()))
                return redirect(RouteServiceProvider::HOME);
        }catch (\Exception $exception){
            return redirect()->back()->withErrors(['msg' =>$exception->getMessage()]);
        }
    }
    public function doSignupold(RegisterRequest $request){
        try{
            if(AuthService::createCustomerAndAutoLogin($request->all()))
                return redirect(RouteServiceProvider::HOME);
        }catch (\Exception $exception){
                return redirect()->back()->withErrors(['msg' =>$exception->getMessage()]);
        }
    }
    public function getLoginForm(){
        return view('auth.login');
    }
    public function doLogin(LoginRequest $request){
        try{
            $request->authenticate();
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
        }catch (\Exception $exception){
            return redirect()->back()->withErrors(['msg' =>$exception->getMessage()]);
        }
    }
}
