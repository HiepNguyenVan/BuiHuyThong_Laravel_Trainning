<?php

use Illuminate\Database\Seeder;

class Car_colorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars-colors')->insert([
            ['car_id' => 1 , 'color_id' => 1],
            ['car_id' => 2 , 'color_id' => 1],
            ['car_id' => 3 , 'color_id' => 1],
            ['car_id' => 4 , 'color_id' => 2],
            ['car_id' => 4 , 'color_id' => 3],
            ['car_id' => 4 , 'color_id' => 4],
            ['car_id' => 5 , 'color_id' => 1],
        ]);
    }
}
