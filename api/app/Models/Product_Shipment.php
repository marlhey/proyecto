<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_Shipment extends Model
{
    protected $table = 'shipments';
    protected $fillable = [
'order_id',
'customer_id',
'mailing_address',
'shipping_method',
'shipping_cost',
'status',
'shipping_date',
'tracking_code',
    ];
}
