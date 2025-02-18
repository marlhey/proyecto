<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sale_details')->insert([
            'sale_id'=>1,
            'product_id'=>1,
            'amount'=>2,
            'unit_price'=>256,
            'subtotal'=>512
        ]);

        DB::table('sale_details')->insert([
            'sale_id'=>2,
            'product_id'=>2,
            'amount'=>1,
            'unit_price'=>300,
            'subtotal'=>300
        ]);
    }
}
