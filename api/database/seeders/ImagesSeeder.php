<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            'product_id'=>'1',
            'img'=>'',
                    ]);

                    DB::table('images')->insert([
                        'product_id'=>'2',
                        'img'=>'',
                                ]);
    }
}
