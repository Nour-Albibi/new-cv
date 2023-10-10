<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public function subscription(){
        return $this->belongsTo('App\Models\Subscription','subscription_id');
    }
    public function customer(){
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
}
