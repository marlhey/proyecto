<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shipments',function (Blueprint $table){
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->string('mailing_address');
            $table->string('shipping_method');
            $table->double('shipping_cost');
            $table->string('status');
            $table->date('shipping_date');
            $table->string('tracking_code');

            $table->foreign('order_id')->references('id')->on('sales');
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
