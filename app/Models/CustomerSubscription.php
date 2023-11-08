<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSubscription extends Model
{
    use HasFactory;
    protected $table="subscriptions";
    protected $fillable=['package_type','id','package_id','user_id','start_date','end_date','status'];
    public function user(){
        return $this->belongsTo('App\Models\Customer','user_id');
    }
    public function package(){
        return $this->belongsTo('App\Models\Package','package_id');
    }
    public function invoice(){
        return $this->hasOne(Invoice::class);
    }
    public function cancel(){
        Subscription::where('id',$this->id)->update(['status',3]);
    }
}
