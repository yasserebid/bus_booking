<?php

namespace App\Http\Controllers;

use App\helpers;
use App\Lines;
use App\Cities;

class LinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Lines $line)
    {
        $data["line"] = $line;
        $data["available_seats"] = helpers::availableSeats($line, request('from_city_id'), request("to_city_id"));
        $data["from_station"] =  Cities::find(request('from_city_id'));
        $data["to_station"] = Cities::find(request('to_city_id'));
        return view('lineDetails', $data);
    }
}
