<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusSeats extends Model
{
    protected $table = "bus_seats";
    public $timestamps = false;
    protected $guarded = [];
}
