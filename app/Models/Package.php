<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    public function coupons(){
        return $this->hasMany('App\Models\Coupon','package_idphp artisan admin:make UserController --model=App\User');
    }
    public function features(){
        return $this->hasMany('App\Models\PackagesFeautre','package_id');
    }
}
