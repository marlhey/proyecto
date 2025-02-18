<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            'customer_id'=>'1',
            'payment'=>365,
            'method_id'=>1,
            'status'=>'Completado',
            'payment_date'=>'2025-01-20',
            'transaction_reference'=>'TXN1234567890ABC'
        ]);

        DB::table('payments')->insert([
            'customer_id'=>'2',
            'payment'=>360,
            'method_id'=>2,
            'status'=>'Pendiente',
            'payment_date'=>'2025-02-10',
            'transaction_reference'=>'TXN1234567890ABC'
        ]);
    }
}
