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
        Schema::create('sales', function(Blueprint $table){
            $table->increments('id');
            $table->date('sale_date');
            $table->integer('customer_id')->unsigned();
            $table->decimal('total');
            $table->integer('sale_status_id')->unsigned();
            $table->integer('payment_id')->unsigned();

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('sale_status_id')->references('id')->on('sale_status');
            $table->foreign('payment_id')->references('id')->on('payments');

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
