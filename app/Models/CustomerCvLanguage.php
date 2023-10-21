<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCvLanguage extends Model
{
    use HasFactory;
    protected $fillable=['customer_cv_id','language_ar','language_en','language_id','level_ar','level_en','information_ar',
        'information_en'];
}
