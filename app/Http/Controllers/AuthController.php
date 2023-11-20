<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Customer;
use App\Providers\RouteServiceProvider;
use App\Services\AuthService;
use App\Services\CVService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    //
    public function getSignupForm()
    {
        return view('auth.signup');
    }

    public function doSignup(Request $request)
    {
        try {
            $request->validate([
                    'first_name' => ['required', 'string', 'max:255'],
                    'last_name' => ['required', 'string', 'max:255'],
                    'username' => ['required', 'string', 'max:255', 'unique:' . Customer::class],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Customer::class],
                    'password' => ['required', 'confirmed', Password::defaults()]]
            );
            if (AuthService::createCustomerAndAutoLogin($request->all())){
                if (!empty(session('redirect_after_login'))) {
                $redirect = session('redirect_after_login');
                CVService::syncCustomer();
                    return redirect($redirect);
                }else{
                    return redirect(RouteServiceProvider::HOME);
                }
            }
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors(['msg' => $exception->getMessage()]);
        }
    }

    public function doSignupold(RegisterRequest $request)
    {
        try {
            if (AuthService::createCustomerAndAutoLogin($request->all())) {
                CVService::syncCustomer();
                return redirect(RouteServiceProvider::HOME);
            }
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors(['msg' => $exception->getMessage()]);
        }
    }

    public function getLoginForm()
    {
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
        try {
            $guard = "customer";
            if (!empty($request->customer_type) && $request->customer_type == 2)
                $guard = "company";
            $request->authenticate($guard);
            $request->session()->regenerate();
            if (!empty(session('redirect_after_login'))) {
                $redirect = session('redirect_after_login');
                CVService::syncCustomer();
                Session::put('show_confirm', 1);
                return redirect($redirect);
            }
            return redirect()->intended(RouteServiceProvider::HOME);
//            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors(['msg' => $exception->getMessage()]);
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::guard('customer')->logout();
        return redirect()->route('home_page');
    }
}
