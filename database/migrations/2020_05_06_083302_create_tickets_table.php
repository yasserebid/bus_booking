<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("line_id");
            $table->unsignedBigInteger("from_city_id");
            $table->unsignedBigInteger("to_city_id");
            $table->unsignedBigInteger("bus_seat_id");
            $table->foreign("line_id")->references("id")->on("lines")->onDelete('cascade');
            $table->foreign("from_city_id")->references("id")->on("cities")->onDelete('cascade');
            $table->foreign("to_city_id")->references("id")->on("cities")->onDelete('cascade');
            $table->foreign("bus_seat_id")->references("id")->on("bus_seats")->onDelete('cascade');
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
        Schema::dropIfExists('tickets');
    }
}
