<?php

use Illuminate\Database\Seeder;

class category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([

            array('name' => 'quần' ),
             array('name' => 'túi xách'),

        ] );
    }
}
