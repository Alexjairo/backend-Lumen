<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservationDetails', function (Blueprint $table) {
            $table->increments('id_reservationdetail');

            $table->integer('flight_id')->increments();
            $table->foreign('flight_id')->references('flight_id')->on('Flights');

            $table->integer('res_id')->increments();
            $table->foreign('res_id')
                  ->references('res_id')
                  ->on('Reservations');

            $table->integer('seatdetail_id');
            $table->foreign('seatdetail_id')
                  ->references('seatdetail_id')
                  ->on('seatDetails');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservationDetail', function (Blueprint $table) {
            //
        });
    }
}
