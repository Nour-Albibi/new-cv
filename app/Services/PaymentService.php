<?php

namespace App\Services;

use App\Models\CustomerCv;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Package;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Jackiedo\Cart\Facades\Cart;

class PaymentService
{
    public static function checkout($data){
        //Payment API
        //Create Subscription
        $cart=Cart::name('cv');
       $invoice=DB::transaction(function () use($data,$cart) {
            $package=Package::find($data['package_id']);
            //Check id to upgrade then we have to cancel current active subscription
            //and subscribe with new one
           if(Auth::guard('customer')->user()->has_active_subscription()){
               //Cancel current it
               Auth::guard('customer')->user()->getActiveSubscription()->cancel();
           }
            $subscription=Subscription::create(['user_id'=>Auth::guard('customer')->user()->id,
                'package_id'=>$package->id,
                'package_type'=>$package->type,
                'start_date'=>Carbon::now()->toDateTimeString(),
                'end_date'=>Carbon::now()->addDays(($package->duration*30)),
                'max_cv_limit'=>$package->quantity,
                'current_cv_count'=>1,
                'status'=>1]);
           $cvItem=$cart->getDetails()->get('items')->first();
           if(!empty($cvItem))
            CustomerCv::where('id',$cvItem->id)->update(['subscription_id'=>$subscription->id]);
        //Create Invoice
            $invoice_id=(Invoice::select('id')->latest()->first()->id ?? 1)+1;
            $invoice_no="INV000".$invoice_id;
            $package=Package::find($data['package_id']);
            $invoice=Invoice::create(['invoice_no'=>$invoice_no,
                'subscription_id'=>$subscription->id,
                'customer_id'=>$subscription->user_id,
                'cutomer_type'=>1,
                'package_fee'=>$package->total_price,
                'sub_total'=>$cart->getDetails()->items_subtotal,
                'total_amount'=>$cart->getDetails()->items_subtotal,
                'invoice_date'=>Carbon::now()->toDateString(),
                'status'=>2]);

            InvoiceDetail::create(['invoice_id' => $invoice->id,
                'name_on_card'=>$data['name_on_card'],
                'card_number'=>$data['card_number'],
                'expiry'=>$data['expiry'],
                'cvv'=>$data['cvv'] ?? '',
                'address'=>$data['address'] ?? '',
                'city'=>$data['city'] ?? '',
                'state'=>$data['state'] ?? '',
                'zip_code'=>$data['zip_code'] ?? ''
            ]);
            return $invoice;
        });
        //Destroy Cart
        if(!empty($invoice)){
            session('current_step_num',0);
            Session::forget('customer_cv_data');
            Session::forget('show_confirm');
            $cart->destroy();
        }
        return true;
    }
}
