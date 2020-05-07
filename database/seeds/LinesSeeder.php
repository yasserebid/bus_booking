<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lines')->insert([
            'start_city_id' => 1,
            'end_city_id' => 2,
        ]);
        DB::table('lines')->insert([
            'start_city_id' => 1,
            'end_city_id' => 3,
        ]);
    }
}
