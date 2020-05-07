<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationsAvailableSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations_available_seats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("station_id");
            $table->unsignedBigInteger("bus_seat_id");
            $table->foreign('station_id')->references('id')->on("stations")->onDelete('cascade');
            $table->foreign('bus_seat_id')->references('id')->on("bus_seats")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stations_available_seats');
    }
}
