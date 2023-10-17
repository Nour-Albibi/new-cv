<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function subscription(){
        return $this->hasMany('App\Models\CustomerSubscription','user_id');
    }
    public function customer_cv(){
        return $this->hasMany('App\Models\CustomerCv','customer_id');
    }
    public function invoice(){
        return $this->hasMany('App\Models\Invoice','customer_id');
    }
}
