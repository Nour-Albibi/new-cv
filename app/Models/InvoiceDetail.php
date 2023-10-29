<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;
    protected $fillable=['invoice_id','name_on_card','card_number','expiry','cvv','address',
        'city','state','zip_code'];
}
