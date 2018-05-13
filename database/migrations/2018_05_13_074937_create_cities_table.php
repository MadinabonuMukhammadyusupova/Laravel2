<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->boolean('choosenCity');
            $table->string('FullName', 119);
            $table->date('travel_Date');
            $table->integer('duration');
            $table->string('pasport_Number');
            $table->string('phone_Number');
            $table->integer('Number_Travelers');
            $table->string('Hotel');
            $table->string('email')->unique();
            $table->string('fbsql_username(link_identifier)');
            $table->string('fbsql_password(link_identifier)');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
