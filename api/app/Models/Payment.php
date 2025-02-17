<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
'customer_id',
'payment',
'method_id',
'status',
'payment_date',
'transaction_reference',
    ];
}
