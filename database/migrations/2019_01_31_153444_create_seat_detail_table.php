<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seatDetails', function (Blueprint $table) {
            $table->increments('seatdetail_id');
            $table->boolean('state');

            $table->integer('seat_id')->increments();
            $table->foreign('seat_id')
                  ->references('seat_id')
                  ->on('Seats');

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
        Schema::table('seatDetail', function (Blueprint $table) {
            //
        });
    }
}
