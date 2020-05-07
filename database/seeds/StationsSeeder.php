<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stations')->insert([
            'line_id' => 1,
            'city_id' => 1,
            'order' => 1
        ]);
        DB::table('stations')->insert([
            'line_id' => 1,
            'city_id' => 4,
            'order' => 2
        ]);
        DB::table('stations')->insert([
            'line_id' => 1,
            'city_id' => 5,
            'order' => 3
        ]);
        DB::table('stations')->insert([
            'line_id' => 1,
            'city_id' => 6,
            'order' => 4
        ]);
        DB::table('stations')->insert([
            'line_id' => 1,
            'city_id' => 2,
            'order' => 5
        ]);


        DB::table('stations')->insert([
            'line_id' => 2,
            'city_id' => 1,
            'order' => 1
        ]);
        DB::table('stations')->insert([
            'line_id' => 2,
            'city_id' => 7,
            'order' => 2
        ]);
        DB::table('stations')->insert([
            'line_id' => 2,
            'city_id' => 8,
            'order' => 3
        ]);
        DB::table('stations')->insert([
            'line_id' => 2,
            'city_id' => 3,
            'order' => 4
        ]);
    }
}
