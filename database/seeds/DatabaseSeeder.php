<?php

use App\Stations;
use App\StationsAvailableSeats;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CitiesSeeder::class,
            BusSeatsSeeder::class,
            LinesSeeder::class,
            LineTripsSeeder::class,
            StationsSeeder::class,
            StationsAvailableSeatsSeeder::class
        ]);
    }
}
