<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            ['name' => 'BMW','price' => 5000000000],
            ['name' => 'Audi','price' => 4200000000],
            ['name' => 'HonDa','price' => 3300000000],
            ['name' => 'Suzuki','price' => 10000000000],
            ['name' => 'Porsche','price' => 7000000000],
            ['name' => 'Huyndai','price' => 2500000000],
        ]);
    }
}
