<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cities;
use App\LineTrips;

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
            $data["lines"] =  LineTrips::where('from_city_id', $request->from)
            ->Where("to_city_id", $request->to)
            ->get();
        }
        $data['cities'] = Cities::all();
        return view('home', $data);
    }

}
