<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;

public function company()
{
    return $this->belongsTo('App\Models\Customer','company_id');
}

public function cv()
{
    return $this->belongsTo('App\Models\CustomerCv','cv_id');
}

protected $perPage = 3;








}
