<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable =[
        'customer_id',
        'number_phone',
        'address',
        'rfc',
    ];
}
