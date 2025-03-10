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

   public function images()
{
    return $this->hasMany(Image::class, 'product_id');
}

public function reviews()
{
    return $this->hasMany(Review::class, 'product_id');
}

public function salesDetails()
{
    return $this->hasMany(Sale_Detail::class, 'product_id');
}
}
