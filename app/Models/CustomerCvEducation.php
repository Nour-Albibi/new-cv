<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCvEducation extends Model
{
    use HasFactory;
    protected $table="customer_cv_educations";
    protected $fillable=['customer_cv_id','institution_name_en','institution_name_ar','city_ar','city_en','qualification_id',
        'field_study_ar','field_study_en','honours_ar','honours_en','start_date','end_date','current'];
}
