<?php

namespace App\Http\Controllers\Api;

use App\helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\LinesRequest;
use App\Lines;
use App\Cities;
use App\Stations;

class LinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LinesRequest $request)
    {
       $line = Lines::where("id",$request->line_id)->first();
       $data["line"]= [
        "line_id"=>$line->id,
        "from_city"=>$line->fromCity->name,   
        "to_city"=>$line->toCity->name,   
    ];
       $stations = Stations::where("line_id",$line->id)->orderBy('order','asc')->get();
       foreach($stations as $station){
        $data["line"]["stations"][] = $station->city->name;
       }

      
        $available_seats = helpers::availableSeats($line, $request->from_city_id, $request->to_city_id);
        $data["available_seats_count"] = $available_seats->count();
        foreach($available_seats as $seat){
            $data["available_seats"][]=[
                "seat_id"=>$seat->bus_seat_id,
                "seat_code"=>$seat->seat->code,
            ];
        }
        $data["from_station"] =  Cities::find($request->from_city_id);
        $data["to_station"] = Cities::find( $request->to_city_id);
        return response()->json($data);
    }
}
