<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCv extends Model
{
    use HasFactory;
    public function template(){
        return $this->belongsTo('App\Models\Template');
    }
    public function customer(){
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
    public function customer_cv_work_history(){
        return $this->hasMany('App\Models\CustomerCvWorkHistory','customer_cv_id');
    }
    public function customer_cv_project(){
        return $this->hasMany('App\Models\CustomerCvProject','customer_cv_id');
    }
    public function customer_cv_education(){
        return $this->hasMany('App\Models\CustomerCvEducation','customer_cv_id');
    }
    public function customer_cv_course(){
        return $this->hasMany('App\Models\CustomerCvCourse','customer_cv_id');
    }
    public function customer_cv_skill(){
        return $this->hasMany('App\Models\CustomerCvSkill','customer_cv_id');
    }
    public function customer_cv_summery(){
        return $this->hasMany('App\Models\CustomerCvSummery','customer_cv_id');
    }
    public function customer_cv_language(){
        return $this->hasMany('App\Models\CustomerCvLanguage','customer_cv_id');
    }
}
