<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
'name'=>'sudadera My Hero Academia',
'slug'=>'sudaderas_Anime',
'img'=>'default_product.jpg',
'price'=>300.00,
'catogory_id'=>'2',
'description'=>'Sudadera roja de My Hero Academia con un diseño impactante que
    presenta tres ventanitas en el pecho, mostrando los ojos de tres icónicos
    personajes de la serie.',
'stock'=>'8',
'status'=>'Disponible',
        ]);
   
        DB::table('products')->insert([
            'name'=>'Manga One Punch Man Vol. 29',
            'slug'=>'Manga_Anime',
            'img'=>'default_product2.jpg',
            'price'=>220.00,
            'catogory_id'=>'1',
            'description'=>'Garou sigue evolucionando en su camino 
            como el cazador de héroes, mientras que Saitama, con su fuerza abrumadora, 
            se ve envuelto en el caos de la Asociación de Monstruos. 
            Manga de segunda mano son daños. De colección.',
            'stock'=>'3',
            'status'=>'Disponible',
                    ]);
    }
}
