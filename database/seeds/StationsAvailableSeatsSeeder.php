<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationsAvailableSeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stations = [1,2,3,4,5,6,7,8,9];
        $seats = [1,2,3,4,5,6,7,8,9,10,11,12];
        foreach($stations as $station){
            foreach($seats as $seat){
                DB::table('stations_available_seats')->insert([
                    'station_id' => $station,
                    'bus_seat_id' => $seat
                ]);
            }
        }
    }
}
