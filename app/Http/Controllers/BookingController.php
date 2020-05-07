<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use Illuminate\Http\Request;
use App\Tickets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class BookingController extends Controller
{

    public function store(BookingRequest $request)
    {
        //check the same user on the same line
        if (!Config::get('app.multi_tickets')) {
            $tickets = Auth::user()->tickets()->where("line_id", $request->line_id)->count();
            if ($tickets > 0) {
                return  redirect()->back()->withErrors(['Sorry , You already have an opened ticket on this line'])->withInput();
            }
        }
        $check = Tickets::where("bus_seat_id", $request->bus_seat_id)
            ->where("from_city_id", $request->from_city_id)
            ->where("to_city_id", $request->to_city_id)
            ->where("line_id", $request->line_id)
            ->first();
        if (is_object($check))
            return   redirect()->back()->withErrors(['Sorry , This seat has been booked']);

        $request->request->add(['user_id' => Auth::user()->id]);
        $ticket = new Tickets();
        $ticket->fill($request->all());
        $ticket->save();

        return  redirect('where-to')->with(["status" => 'Thank you for Booking'])->withInput();
    }
}
