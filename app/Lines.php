<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lines extends Model
{
    protected $table = "lines";
    public $timestamps = false;
    protected $guarded = [];


    public function fromCity(){
        return $this->belongsTo(Cities::class , 'start_city_id');
    }

    public function toCity(){
        return $this->belongsTo(Cities::class , 'end_city_id');
    }

    public function trips(){
        return $this->hasMany(LineTrips::class , 'line_id');
    }


    public function stations(){
        return $this->hasMany(Stations::class , 'line_id')->orderBy('order','asc');
    }


    public function station($city_id){
        return $this->hasOne(Stations::class , 'line_id')->where('city_id',$city_id);
    }

    public function tickets(){
        return $this->hasMany(tickets::class , 'line_id');
    }
}
