<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stations extends Model
{
    protected $table = "stations";
    public $timestamps = false;
    protected $guarded = [];


    public function city()
    {
        return $this->belongsTo(Cities::class, 'city_id');
    }
    public function line()
    {
        return $this->belongsTo(Lines::class, 'line_id');
    }

    //get tickets that will ride from this station
    public function onTickets()
    {
        return $this->hasMany(tickets::class, 'from_city_id','city_id');
    }

    //get tickets that will arrive to this station
    public function offTickets()
    {
        return $this->hasMany(tickets::class, 'to_city_id','city_id');
    }


    public function availableSeats(){
        return $this->hasMany(StationsAvailableSeats::class, 'station_id');
    }
}
