<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Juana Pérez',
            'email'=>'JuanaP1@gmail.com',
            'password'=>Hash::make('1111'),
            'img_profile'=>'default.png',
        ]);


        DB::table('users')->insert([
            'name'=>'Sara Gómez',
            'email'=>'SaraG1@gmail.com',
            'password'=>Hash::make('2222'),
            'img_profile'=>'default.png',
        ]);

    }
}
