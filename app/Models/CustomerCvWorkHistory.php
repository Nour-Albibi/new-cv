<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCvWorkHistory extends Model
{
    use HasFactory;
    protected $fillable=['customer_cv_id','job_title_ar','job_title_en','job_title_id','employeer_ar',
        'employeer_en','city_ar','city_en','country_ar','country_en','start_date','end_date','current',
        'experience_description_ar','experience_description_en'];

}
