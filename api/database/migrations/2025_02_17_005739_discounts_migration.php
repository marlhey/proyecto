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
        Schema::create('discounts', function(Blueprint $table){
            $table->increments('id');
            $table->string('discount_key');
            $table->integer('quantity');
            $table->integer('sale_id')->unsigned();
            $table->string('state');

            $table->foreign('sale_id')->references('id')->on('sales');

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
