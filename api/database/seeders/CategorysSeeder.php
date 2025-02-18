<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorys')->insert([
            'name'=>'Mangas',
            'description'=>'Historias originales en formato impreso.',
            'image'=>'default_category.jpg',
            'state'=>'Activo',
        ]);

        DB::table('categorys')->insert([
            'name'=>'Ropa y Accesorios',
            'description'=>'Moda inspirada en anime, ropa temática y complementos.',
            'image'=>'default_category2.jpg',
            'state'=>'Activo',
        ]);
    }
}
