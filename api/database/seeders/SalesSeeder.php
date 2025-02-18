<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sales')->insert([
            'sale_date'=>'2025-02-07',
            'customer_id'=>1,
            'total'=>1200,
            'sale_status_id'=>2,
            'payment_id'=>1
        ]);

        DB::table('sales')->insert([
            'sale_date'=>'2025-01-08',
            'customer_id'=>2,
            'total'=>1000,
            'sale_status_id'=>1,
            'payment_id'=>2
        ]);
    }
}
