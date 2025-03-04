<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale_Details extends Model
{
    protected $table = 'sale_details'; 
    protected $fillable = [
    'sale_id',
    'product_id',
    'amount',
    'unit_price',
    'subtotal',
        ];
}
