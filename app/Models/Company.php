<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table="customers";
    public function subscription(){
        return $this->hasMany('App\Models\CompanySubscription','user_id');
    }

}
