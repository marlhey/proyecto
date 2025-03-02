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
        Schema::create('products', function (Blueprint $table){
            $table->increments('id');
            $table->string('name',30);
            $table->string('slug',100);
            $table->string('img');
            $table->double('price');
            $table->integer('category_id')->unsigned();
            $table->text('description');
            $table->integer('stock');
            $table->string('status');

            $table->foreign('category_id')->references('id')->on('categorys');

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
