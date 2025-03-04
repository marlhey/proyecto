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

    public function sales()
    {
        return $this->hasMany(Sale::class, 'nombre_correcto_de_la_foreign_key');
    }
}
