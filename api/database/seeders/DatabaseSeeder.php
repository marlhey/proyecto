<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(CategorysSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(SuppliersSeeder::class);
        $this->call(MethodsSeeder::class);
        $this->call(PaymentsSeeder::class);
        $this->call(SalesStatusSeeder::class);
        $this->call(SalesSeeder::class);
        $this->call(SalesDetailsSeeder::class);
        $this->call(DiscountsSeeder::class);
        $this->call(ProductsShipmentsSeeder::class);
        $this->call(ReviewsSeeder::class);
        
      
    }
}
