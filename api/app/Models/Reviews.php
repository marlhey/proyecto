<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $fillable = [
'user_id',
'product_id',
'quantification',
'comment',
'review_date',
    ];
}
