<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTouristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourists', function (Blueprint $table) {
            $table->increments('id');
             $table->string('phone');
            $table->string('hotel');
            $table->string('transport');
            $table->string('passportID');
            $table->string('name');
            $table->string('password')->unique();
            $table->string('email')->unique();
            $table->integer('duration');
            $table->integer('num_of_tourists');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourists');
    }
}
