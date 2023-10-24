<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model
{
    use HasFactory;
    public function skills(){
        return $this->hasMany('App\Models\Skill','job_title_id');
    }
}
