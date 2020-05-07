<?php

namespace App\Observers;

use App\Tickets;
use App\Lines;
use App\Stations;
use App\StationsAvailableSeats;

class TicketsObserver
{
    /**
     * Handle the tickets "created" event.
     *
     * @param  \App\Tickets  $tickets
     * @return void
     */
    public function created(Tickets $ticket)
    {
        $line = $ticket->line_id;
        $from = $ticket->from_city_id;
        $to = $ticket->to_city_id;
        $bus_seat_id = $ticket->bus_seat_id;

        $from_station_order = Stations::where("line_id", $line)->where('city_id', $from)->first()->order;
        $to_station_order = Stations::where("line_id", $line)->where('city_id', $to)->first()->order;

        $stationsInBetween = Stations::where("line_id", $line)->where("order", '>=', $from_station_order)
            ->where('order', '<', $to_station_order)->get();

        foreach ($stationsInBetween as $station) {
            StationsAvailableSeats::where('station_id', $station->id)->where('bus_seat_id', $bus_seat_id)->delete();
        }
    }

    /**
     * Handle the tickets "updated" event.
     *
     * @param  \App\Tickets  $tickets
     * @return void
     */
    public function updated(Tickets $tickets)
    {
        //
    }

    /**
     * Handle the tickets "deleted" event.
     *
     * @param  \App\Tickets  $tickets
     * @return void
     */
    public function deleted(Tickets $tickets)
    {
        //
    }

    /**
     * Handle the tickets "restored" event.
     *
     * @param  \App\Tickets  $tickets
     * @return void
     */
    public function restored(Tickets $tickets)
    {
        //
    }

    /**
     * Handle the tickets "force deleted" event.
     *
     * @param  \App\Tickets  $tickets
     * @return void
     */
    public function forceDeleted(Tickets $tickets)
    {
        //
    }
}
