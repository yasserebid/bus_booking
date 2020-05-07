<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineTrips extends Model
{
    protected $table = "line_trips";
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
}
