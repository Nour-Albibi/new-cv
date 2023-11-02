<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable=['user_id','package_id','package_type','start_date','end_date','status'];
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
//        $this->status=3;
//        $this->save();
    }

}
