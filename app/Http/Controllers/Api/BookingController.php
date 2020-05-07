<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Http\Requests\BookingRequest;
use App\Tickets;
use Illuminate\Support\Facades\Config;

class BookingController extends Controller
{

    public function store(BookingRequest $request)
    {
        //check the same user on the same line
        if (!Config::get('app.multi_tickets')) {
            $tickets = $request->user()->tickets()->where("line_id", $request->line_id)->count();
            if ($tickets > 0) {
                return  response()->json(["error"=>'Sorry , You already have an opened ticket on this line']);
            }
        }

        $check = Tickets::where("bus_seat_id", $request->bus_seat_id)
            ->where("from_city_id", $request->from_city_id)
            ->where("to_city_id", $request->to_city_id)
            ->where("line_id", $request->line_id)
            ->first();
        if (is_object($check))
            return  response()->json(["error"=>'Sorry , This seat has been booked']);

        $ticket = new Tickets();
        $ticket->create(array_merge($request->all(), ['user_id' => $request->user()->id]));


        return  response()->json(["success"=>'Thank you for booking']);
    }
}
