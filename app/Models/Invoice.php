<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable=['invoice_no','subscription_id','customer_id','cutomer_type','package_fee','sub_total',
        'discount_value','discount_id','coupon_code','total_amount','invoice_date','status','payment_gateway','payment_status'];
    public function subscription(){
        return $this->belongsTo('App\Models\Subscription','subscription_id');
    }
    public function customer(){
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
}
