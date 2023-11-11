<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersMessage extends Model
{
    use HasFactory;
    protected $fillable=['full_name','message','phone_number','subject','email'];
}
