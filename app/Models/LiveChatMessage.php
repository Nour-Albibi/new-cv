<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveChatMessage extends Model
{
    use HasFactory;
    protected $fillable=['company_id','employee_id','message','from_user','to_user','image'];
    public function employeesList(){
        return $this->belongsTo('App\Models\Customer','employee_id');
    }
    public function sent_from_user(){
        return $this->belongsTo('App\Models\Customer','from_user');
    }
    public function sent_to_user(){
        return $this->belongsTo('App\Models\Customer','to_user');
    }
}
