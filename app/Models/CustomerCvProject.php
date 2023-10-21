<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCvProject extends Model
{
    use HasFactory;
    protected $fillable=['customer_cv_id','project_name_en','project_name_ar','description_en','description_ar',
        'start_date','end_date'];
}
