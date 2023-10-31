<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Services\CVService;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Jackiedo\Cart\Facades\Cart;

class PaymentController extends Controller
{
    public function checkout(Request $request){
        if ($request->isMethod('post')) {
            //Must Do Validate Data
            if(PaymentService::checkout($request->all())){
                return redirect()->route('order_confirmed');
            };
        }else{
            $cart=Cart::name('cv');
            $total = $cart->getDetails()->items_subtotal;
            $cvItem=$cart->getDetails()->get('items')->first();
            $package_id=CVService::getCVItem()->get('extra_info')->package_id;
            $package=Package::findOrFail($package_id);
            return view('payments.index',compact('cart','total','cvItem','package'));
        }
    }
    public function order_confirmed(){
        return view('payments.order_confirmed');
    }
}
