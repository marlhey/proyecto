<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable =[
'name_company',
'contact_id',
'phone',
'email',
'address',
'web_site',
    ];
}
