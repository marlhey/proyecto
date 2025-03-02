<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = [
      'name',
      'slug',
      'img_id',
      'price',
      'category_id',
      'description',
      'stock',
      'status',
   ];

   public function category()
   {
       return $this->belongsTo(Category::class, 'category_id');
   }
}
