<?php

namespace App;

class helpers
{
    public static function availableSeats($line, $from, $to)
    {
        $from_station_order = Stations::where("line_id", $line->id)->where('city_id', $from)->first()->order;
        $to_station_order = Stations::where("line_id", $line->id)->where('city_id', $to)->first()->order;

        $stationsInBetween = Stations::where("line_id", $line->id)->where("order", '>=', $from_station_order)
            ->where('order', '<', $to_station_order)->pluck('id')->toArray();



        $result = StationsAvailableSeats::select("bus_seat_id")->whereIn('station_id', $stationsInBetween)
            ->groupBy('bus_seat_id')
            ->havingRaw("count(distinct case when station_id in (" . implode(",", $stationsInBetween) . ") then station_id end) =  " . count($stationsInBetween))
            ->get();

        return $result;
    }
}
