<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('methods')->insert([
            'name_method'=>'Transferencia bancaria',
        ]);

        DB::table('methods')->insert([
            'name_method'=>'Depositos en tiendas de conveniencia',
        ]);
    }
}
