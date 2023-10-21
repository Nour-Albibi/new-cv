<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCvCourse extends Model
{
    use HasFactory;
    protected $fillable=['customer_cv_id','course_name_ar','course_name_en','trainer_ar','trainer_en','start_date','end_date'];
}
