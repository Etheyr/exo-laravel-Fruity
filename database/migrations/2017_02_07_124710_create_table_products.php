<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{

    public function up()
    {
        Schema::create('products',function (Blueprint $table){
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('price');
            $table->text('description');
            $table->integer('stock');
        });
    }

    public function down()
    {
        Schema::drop('exo-laravel');
    }
}
