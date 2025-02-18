<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sale_status')->insert([
            'name'=>'Pendiente'
        ]);

        DB::table('sale_status')->insert([
            'name'=>'Pagado'
        ]);

        DB::table('sale_status')->insert([
            'name'=>'En Proceso'
        ]);

        DB::table('sale_status')->insert([
            'name'=>'Enviado'
        ]);

        DB::table('sale_status')->insert([
            'name'=>'Entregado'
        ]);

        DB::table('sale_status')->insert([
            'name'=>'Cancelado'
        ]);

        DB::table('sale_status')->insert([
            'name'=>'Reembolsado'
        ]);
    }
}
