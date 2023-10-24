<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable=['name_ar','name_en','job_title_id'];
    public function job_title(){
        return $this->belongsTo('App\Models\JobTitle','job_title_id');
    }
}
