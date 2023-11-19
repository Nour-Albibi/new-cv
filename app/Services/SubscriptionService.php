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

class SubscriptionService
{
    public static function subscribe_new($data){
        $invoice=DB::transaction(function () use($data) {
            $package=Package::find($data['package_id']);
            if($data['customer_type']==1){
                $guard="customer";
            }else{
                $guard="company";
            }
            if(Auth::guard($guard)->user()->has_active_subscription()){
                //Cancel current it
                Auth::guard($guard)->user()->getActiveSubscription()->cancel();
            }
            $subscription=Subscription::create(['user_id'=>Auth::guard($guard)->user()->id,
                'package_id'=>$package->id,
                'package_type'=>$package->type,
                'start_date'=>Carbon::now()->toDateTimeString(),
                'end_date'=>Carbon::now()->addDays(($package->duration*30)),
                'max_cv_limit'=>$package->quantity,
                'current_cv_count'=>0,
                'status'=>1]);
            //Create Invoice
            $invoice_id=(Invoice::select('id')->latest()->first()->id ?? 1)+1;
            $invoice_no="INV000".$invoice_id;
            $invoice=Invoice::create(['invoice_no'=>$invoice_no,
                'subscription_id'=>$subscription->id,
                'customer_id'=>$subscription->user_id,
                'cutomer_type'=>$data['customer_type'],
                'package_fee'=>$package->total_price,
                'sub_total'=>$package->total_price,
                'total_amount'=>$package->total_price,
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
        if(!empty($invoice)){
            return true;
        }
    }
}
