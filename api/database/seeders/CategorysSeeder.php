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
            'image'=>'manga2.web',
            'state'=>'Activo',
        ]);

        DB::table('categorys')->insert([
            'name'=>'Ropa',
            'description'=>'Moda inspirada en anime, ropa temática y complementos.',
            'image'=>'camisa.jpeg',
            'state'=>'Activo',
        ]);

        DB::table('categorys')->insert([
            'name'=>'Accesorios',
            'description'=>'Completa tu estilo con lo mejor de tus articulos favoritos ',
            'image'=>'cuadernos.webp',
            'state'=>'Activo',
        ]);

        DB::table('categorys')->insert([
            'name'=>'Calzado',
            'description'=>'Crea el mejor conjunto',
            'image'=>'calzado.avif',
            'state'=>'Activo',
        ]);
    }
}
