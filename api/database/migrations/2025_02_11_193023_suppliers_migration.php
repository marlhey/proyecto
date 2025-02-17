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
        Schema::create('suppliers', function(Blueprint $table){
            $table->increments('id');
            $table->string('name_company');
            $table->integer('contact_id')->unsigned();
            $table->string('phone',10);
            $table->string('address');
            $table->string('email');
            $table->string('web_site');

            $table->foreign('contact_id')->references('id')->on('users');

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
