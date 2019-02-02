<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Flights', function (Blueprint $table) {
            $table->increments('flight_id');
            $table->string('dest');
            $table->date('dateflight');
            $table->time('horasalida');
            $table->time('horallegada');

            $table->integer('type_flight')->increments();
            $table->foreign('type_flight')
                  ->references('type_flight')
                  ->on('typeFlights');

            $table->integer('airport_arrive')->incements();
            $table->foreign('airport_arrive')
                  ->references('air_id')
                  ->on('Airports');

            $table->integer('airport_departure')->increments();
            $table->foreign('airport_departure')
                  ->references('air_id')
                  ->on('Airports');

            $table->integer('airplane_id')->increments();
            $table->foreign('airplane_id')
                  ->references('airplane_id')
                  ->on('Airplanes');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Flight', function (Blueprint $table) {
            //
        });
    }
}
