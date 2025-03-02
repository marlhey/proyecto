<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('discounts')->insert([
            'discount_key'=>'papaslocas',
            'quantity'=>2,
            'sale_id'=>1,
            'state'=>'activo'
        ]);

        DB::table('discounts')->insert([
            'discount_key'=>'lospinos',
            'quantity'=>1,
            'sale_id'=>2,
            'state'=>'inactivo'
        ]);
    }
}
