<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reservations', function (Blueprint $table) {
            $table-> increments('res_id');
            $table-> float('totalCost');
            $table->boolean('estado');
            $table->timestamps();

            $table->integer('person_id')->increments();
            $table->foreign('person_id')
                  ->references('person_id')
                  ->on('Persons');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Reservation', function (Blueprint $table) {
            //
        });
    }
}
