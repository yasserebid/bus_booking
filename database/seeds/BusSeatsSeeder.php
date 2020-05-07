<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusSeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seats = ['A1', 'A2', 'A3', 'B1', 'B2', 'B3', 'C1', 'C2', 'C3', 'D1', 'D2', 'D3'];
        foreach ($seats as $seat) {
            DB::table('bus_seats')->insert([
                'code' => $seat,
            ]);
        }
    }
}
