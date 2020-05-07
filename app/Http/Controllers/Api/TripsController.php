<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Cities;
use App\LineTrips;
use App\Http\Resources\CitiesResource;
use App\Http\Resources\LineTripsResource;

class TripsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->has('from') &&  $request->has('to')) {
            $lines =  LineTrips::where('from_city_id', $request->from)
            ->Where("to_city_id", $request->to)
            ->get();
            return LineTripsResource::collection($lines);
        }
    }


    public function getCities(){
        $cities  = Cities::all();
        return new CitiesResource($cities);
    }

}
