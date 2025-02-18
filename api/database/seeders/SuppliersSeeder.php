<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            'name_company'=>'Game_Steek',
            'contact_id'=>'1',
            'phone'=>'6362224577',
            'address'=>'Chihuahua, Chihuahua, limón #1123',
            'email'=>'gamesteek20@gmail.com',
            'web_site'=>'gameSteekNCG_20',
        ]);

        DB::table('suppliers')->insert([
            'name_company'=>'Akiba_Zone',
            'contact_id'=>'2',
            'phone'=>'6363454476',
            'address'=>'Cuahutémoc, Chihuahua, laberinto #5003',
            'email'=>'akibaZone22@gmail.com',
            'web_site'=>'2_akibaZone_2@',
        ]);
    }
}
