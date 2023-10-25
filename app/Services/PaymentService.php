<?php

namespace App\Services;

use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Package;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Jackiedo\Cart\Facades\Cart;

class PaymentService
{
    public static function checkout($data){
        //Payment API
        //Create Subscription
        $subscription=DB::transaction(function () use($data) {
            $package=Package::find($data['package_id']);
            return Subscription::create(['user_id'=>Auth::guard('customer')->user()->id,
                'package_id'=>$package->id,
                'package_type'=>$package->type,
                'start_date'=>Carbon::now()->toDateTimeString(),
                'end_date'=>Carbon::now()->addDays(($package->duration*30)),
                'status'=>1]);
        });
        //Create Invoice
        $invoice=DB::transaction(function () use($data,$subscription) {
            $invoice_id=(Invoice::select('id')->latest()->first()->id ?? 1)+1;
            $invoice_no="INV000"+$invoice_id;
            $package=Package::find($data['package_id']);
            $cart=Cart::name('cv');
            return Invoice::create(['invoice_no'=>$invoice_id,
                'subscription_id'=>$subscription->id,
                'customer_id'=>$subscription->usr_id,
                'cutomer_type'=>1,
                'package_fee'=>$package->total_price,
                'sub_total'=>$cart->getDetails()->items_subtotal,
                'total_amount'=>$cart->getDetails()->items_subtotal,
                'invoice_date'=>Carbon::now()->toDateString(),
                'status'=>1]);

        });
        DB::transaction(function () use($data,$invoice) {
            InvoiceDetail::create(['invoice_id' => $invoice->id,
                'name_on_card'=>$data['name_on_card'],
                'card_number'=>$data['card_number'],
                'expiry'=>$data['expiry'],
                'cvv'=>$data['cvv'],
                'address'=>$data['address'],
                'city'=>$data['city'],
                'state'=>$data['state'],
                'zip_code'=>$data['zip_code']]);
        });
        //Destroy Cart
    }
}
