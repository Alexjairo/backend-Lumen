<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Persons', function (Blueprint $table) {
            $table->increments('person_id');
            $table->string('name');
            $table->string('lastname');
            $table->string('adress');
            $table->string('email')->unique();
            $table->string('phone',7);
            $table->string('cellPohe',9);
            $table->string('city');
            $table->string('country');
            $table->string('postalCode');
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
        Schema::table('Person', function (Blueprint $table) {
            //
        });
    }
}
