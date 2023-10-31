<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jackiedo\Cart\Contracts\UseCartable;
use Jackiedo\Cart\Traits\CanUseCart;

class CustomerCv extends Model implements UseCartable
{
    use HasFactory;
    use CanUseCart;
    protected $fillable=['template_id','template_color','cv_language','customer_id','first_name',
        'surename','first_name_ar','surename_ar','phone','email','image','open_for_remote','linkedlin_url',
        'address_ar','address_en','city_town_ar','city_town_en','country_ar','country_en','postcode',
        'website','driving_licence','nationality'];
    public function template(){
        return $this->belongsTo('App\Models\Template','template_id');
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
    public function customer_cv_professional_summary(){
        return CustomerCvSummery::where('customer_cv_id',$this->id)->latest()->first();
    }
}
