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
            'name'=>'Sudadera Jujutsu Kaisen',
            'slug'=>'sudadera_Anime_Jujutsu_Kaisen',
            'img'=>'sueter.jpg',
            'price'=>300.00,
            'category_id'=>'2',
            'description'=>'Sudadera negra del anime Jujutsu Kaisen',
            'stock'=>'8',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Pantalonera Kimetsu No Yaiba',
            'slug'=>'pantalonera_Anime_Kimetsu',
            'img'=>'pantalonerakimentsu.jpg',
            'price'=>200.00,
            'category_id'=>'2',
            'description'=>'Pantalonera negra del anime Kimetsu No Yaiba',
            'stock'=>'8',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Conjunto Spy x Family ',
            'slug'=>'Conjunto_Anime_SpyXFamily',
            'img'=>'conjuntospyxfamily.jpg',
            'price'=>400.00,
            'category_id'=>'2',
            'description'=>'Conjunto rosa del anime Spy x Family',
            'stock'=>'8',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Pantalonera Harajuki',
            'slug'=>'pantalonera_Anime_Harajuki',
            'img'=>'pantaloneraharajuki.jpg',
            'price'=>200.00,
            'category_id'=>'2',
            'description'=>'Pantalonera negra del Harajuki',
            'stock'=>'8',
            'status'=>'Disponible',
        ]);
   
        DB::table('products')->insert([
            'name'=>'Manga My Hero Academy',
            'slug'=>'Manga_Anime_My_Hero_Academy',
            'img'=>'mangabokunohiro.jpg',
            'price'=>220.00,
            'category_id'=>'1',
            'description'=>'Muestra la historia de estudiantes que tienen
             diferentes poderes y quieren vencer a los villanos',
            'stock'=>'3',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Manga Frieren',
            'slug'=>'Manga_Frieren',
            'img'=>'mangafrieren.jpg',
            'price'=>220.00,
            'category_id'=>'1',
            'description'=>'Muestra la historia de una chica con poderes 
            sobrenaturales en un reino de fantasia',
            'stock'=>'3',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Manga Inuyashiki',
            'slug'=>'Manga_Inuyashiki',
            'img'=>'mangainuyashiki.jpg',
            'price'=>220.00,
            'category_id'=>'1',
            'description'=>'Muestra la historia sobre un hombre que tiene un
             encuentro con vida extraterrestre ',
            'stock'=>'3',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Manga Solo leveling',
            'slug'=>'Manga_Solo_Leveling',
            'img'=>'mangasololeveling.jpg',
            'price'=>220.00,
            'category_id'=>'1',
            'description'=>'En un mundo en el que ciertos humanos 
            llamados «cazadores» poseen habilidades mágicas',
            'stock'=>'3',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Lampara Dragon Ball',
            'slug'=>'Lampara_Dragon_Ball',
            'img'=>'lamparadragonball.jpg',
            'price'=>110.00,
            'category_id'=>'3',
            'description'=>'Lampara del Anime Dragon Ball Z',
            'stock'=>'3',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Taza One Piece ',
            'slug'=>'Taza_One_Pice',
            'img'=>'tazashopper.jpg',
            'price'=>90.00,
            'category_id'=>'3',
            'description'=>'Taza del Anime One Piece',
            'stock'=>'3',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Cuaderno  Kimetsu No Yaiba ',
            'slug'=>'Cuaderno_Kimetsu_No_Yaiba',
            'img'=>'cuadernos.webp',
            'price'=>100.00,
            'category_id'=>'3',
            'description'=>'Cuaderno del Anime Kimetsu No Yaiba',
            'stock'=>'3',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Olla con estampado de Naruto Shippuden',
            'slug'=>'Olla para ramen',
            'img'=>'olladenaruto.jpg',
            'price'=>760.00,
            'category_id'=>'3',
            'description'=>'Olla para ramen. Anime Naruto Shippuden. Cuenta con un tazon y 2 palillos de metal',
            'stock'=>'4',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Tenis Naruto ',
            'slug'=>'Tenis_Naruto',
            'img'=>'tenisnaruto.jpg',
            'price'=>600.00,
            'category_id'=>'4',
            'description'=>'Tenis del Anime de Naruto Shipuden',
            'stock'=>'3',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Tenis Kimetsu No Yaiba ',
            'slug'=>'Tenis_Kimetsu_No_Yaiba',
            'img'=>'teniskimetsu.jpg',
            'price'=>700.00,
            'category_id'=>'4',
            'description'=>'Tenis del Kimetsu No Yaiba',
            'stock'=>'3',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Tenis Nezuko Kimetsu No Yaiba ',
            'slug'=>'Tenis_Nezuko_Kimetsu_No_Yaiba',
            'img'=>'tenisnesuko.jpg',
            'price'=>700.00,
            'category_id'=>'4',
            'description'=>'Tenis de Nezuko Kimetsu No Yaiba',
            'stock'=>'3',
            'status'=>'Disponible',
        ]);

        DB::table('products')->insert([
            'name'=>'Tenis Nezuko ',
            'slug'=>'Tenis_Nezuko',
            'img'=>'calzado.avif',
            'price'=>700.00,
            'category_id'=>'4',
            'description'=>'Tenis de Nezuko',
            'stock'=>'3',
            'status'=>'Disponible',
        ]);
    }
}
