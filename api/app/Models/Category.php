<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';
    protected $fillable = [
        'name',
        'description',
        'image',
        'state',
    ];
    
    public function products()
{
    return $this->hasMany(Product::class, 'category_id');
}
}
