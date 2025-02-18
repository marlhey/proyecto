<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('reviews')->insert([
        'user_id'=>1,
        'product_id'=>1,
        'quantification'=>3,
        'comment'=>'Es un buen producto pero las piezas no son de buena calidad',
        'review_date'=>'2025-01-01'
     ]);   

     DB::table('reviews')->insert([
        'user_id'=>2,
        'product_id'=>2,
        'quantification'=>4,
        'comment'=>'Es un gran producto calidad precio',
        'review_date'=>'2025-02-02'
     ]); 
    }
}
