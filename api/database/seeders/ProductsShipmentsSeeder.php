<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsShipmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('shipment')->insert([
            'order_id'=>1,
            'customer_id'=>1,
            'mailing_address'=>'Col. las praderas',
            'shipping_method'=>'Envío estándar',
            'shipping_cost'=>140,
            'status'=>'Pendiente',
            'shipping_date'=>'2025-02-18',
            'tracking_code'=>'WRE245SBH'
          ]);

          DB::table('shipment')->insert([
            'order_id'=>2,
            'customer_id'=>2,
            'mailing_address'=>'Av. Los cedros',
            'shipping_method'=>'Envío pendiente',
            'shipping_cost'=>200,
            'status'=>'Preparando envio',
            'shipping_date'=>'2025-01-30',
            'tracking_code'=>'GJSG7888'
          ]);


    }
}
