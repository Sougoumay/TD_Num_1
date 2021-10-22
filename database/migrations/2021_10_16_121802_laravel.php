<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Laravel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laravel',function(Blueprint $table){
            $table->id();
            $table->string('nom');
            $table->integer('age');
            $table->string('email')->unique();
            $table->string('ville')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamp('date');//2021-10-16 14:59:23
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laravel');
    }
}
