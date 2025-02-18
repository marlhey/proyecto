<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'customer_id'=>'1',
            'number_phone'=>'6361289956',
            'address'=>'Chihuahua, Chihuahua, Robles #3403',
            'rfc'=>'MOV1004082C1',
        ]);

        DB::table('customers')->insert([
            'customer_id'=>'2',
            'number_phone'=>'6361243304',
            'address'=>'Cuahutémoc, Chihuahua, Paris #2350',
            'rfc'=>'PEE1004082C1',
        ]);
    }
}
