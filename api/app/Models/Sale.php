<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
'sale_date',
'customer_id',
'total',
'sale_status_id',
'payment_id',
    ];
}
