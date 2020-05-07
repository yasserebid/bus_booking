<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table = "tickets";
    public $timestamps = false;
    protected $guarded = [];


    public function fromCity()
    {
        return $this->belongsTo(Cities::class, 'from_city_id');
    }

    public function toCity()
    {
        return $this->belongsTo(Cities::class, 'to_city_id');
    }
    public function line()
    {
        return $this->belongsTo(Lines::class, 'line_id');
    }

    public function seat()
    {
        return $this->belongsTo(BusSeats::class, 'bus_seat_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
