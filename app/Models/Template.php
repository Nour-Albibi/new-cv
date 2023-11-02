<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $table="templetes";

    protected $fillable = [
        'name_en',
        'name_ar',
        'image',
    ];

    public function customer_cvs(){
        return $this->hasMany('App\Models\CustomerCv','template_id');
    }
}
