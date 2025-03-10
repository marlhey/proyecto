<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'discount_key',
        'quantity',
        'sale_id',
        'state',
    ];

}
