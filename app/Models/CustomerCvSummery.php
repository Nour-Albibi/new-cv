<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCvSummery extends Model
{
    use HasFactory;
    protected $fillable=['customer_cv_id','content_ar','content_en'];
}
