<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Customer  extends Authenticatable
{
   use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_phone',
        'address',
        'company_name',
        'avatar',
        'username',
        'password',
        'remember_token',
        'signed_up_with',
        'customer_type'
    ];
    public function subscription(){
        return $this->hasMany('App\Models\CustomerSubscription','user_id');
    }
    public function cv(){
        return $this->hasMany('App\Models\CustomerCv','customer_id');
    }
    public function customer_cv(){
        return $this->hasMany('App\Models\CustomerCv','customer_id');
    }
    public function invoice(){
        return $this->hasMany('App\Models\Invoice','customer_id');
    }
    public function syncCV($cv_id){
        CustomerCv::where('id',$cv_id)->update(['customer_id'=>$this->id]);
    }
}
