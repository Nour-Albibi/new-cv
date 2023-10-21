<?php

namespace App\Services;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public static function createCustomerAndAutoLogin($data){
        $user = Customer::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username'=>$data['username'],
            'email' => $data['email'],
            'customer_type'=>1,
            'password' => Hash::make($data['password']),
        ]);
        Auth::guard('customer')->login($user);
        return true;
    }
}
