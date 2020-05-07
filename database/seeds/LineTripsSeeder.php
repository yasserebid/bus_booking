<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LineTripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('line_trips')->insert([
            'line_id' => 1,
            'from_city_id' => 1,
            'to_city_id' => 4,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 1,
            'from_city_id' => 1,
            'to_city_id' => 5,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 1,
            'from_city_id' => 1,
            'to_city_id' => 6,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 1,
            'from_city_id' => 1,
            'to_city_id' => 2,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 1,
            'from_city_id' => 4,
            'to_city_id' => 5,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 1,
            'from_city_id' => 4,
            'to_city_id' => 6,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 1,
            'from_city_id' => 4,
            'to_city_id' => 2,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 1,
            'from_city_id' => 5,
            'to_city_id' => 6,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 1,
            'from_city_id' => 5,
            'to_city_id' => 2,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 1,
            'from_city_id' => 6,
            'to_city_id' => 2,
           
        ]);


        DB::table('line_trips')->insert([
            'line_id' => 2,
            'from_city_id' => 1,
            'to_city_id' => 7,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 2,
            'from_city_id' => 1,
            'to_city_id' => 8,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 2,
            'from_city_id' => 1,
            'to_city_id' => 3,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 2,
            'from_city_id' => 7,
            'to_city_id' => 8,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 2,
            'from_city_id' => 7,
            'to_city_id' => 3,
            
        ]);
        DB::table('line_trips')->insert([
            'line_id' => 2,
            'from_city_id' => 8,
            'to_city_id' => 3,
           
        ]);
    }
}
