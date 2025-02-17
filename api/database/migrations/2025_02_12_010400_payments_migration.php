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
        Schema::create('payments', function(Blueprint $table){
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->double('payment');
            $table->integer('method_id')->unsigned();
            $table->string('status');
            $table->date('payment_date');
            $table->string('transaction_reference');

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('method_id')->references('id')->on('methods');

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
