<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Jackiedo\Cart\Facades\Cart;

class PaymentController extends Controller
{
    public function checkout(Request $request){
        if ($request->isMethod('post')) {
            //Must Do Validate Data
            PaymentService::checkout($request->all());
        }else{
            $cart=Cart::name('cv');
            $total = $cart->getDetails()->items_subtotal;
            $cvItem=$cart->getDetails()->get('items')->first();
            $package=Package::findOrFail($cvItem->package_id);
            return view('payments.index',compact('cart','total','cvItem','package'));
        }
    }
}
