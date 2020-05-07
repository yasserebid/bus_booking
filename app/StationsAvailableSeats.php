<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StationsAvailableSeats extends Model
{
    protected $table = "stations_available_seats";
    public $timestamps = false;
    protected $guarded = [];


    public function station()
    {
        return $this->belongsTo(Stations::class, 'station_id');
    }
    public function seat()
    {
        return $this->belongsTo(BusSeats::class, 'bus_seat_id');
    }

    
}
