<?php

use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert(array(
            array('name' => 'Hinh quan sort' , 'product_id' => 1),
            array('name' => 'Hinh tui xach' , 'product_id' => 4),
            array('name' => 'Hinh tui xach mau hong' , 'product_id' => 4),
            array('name' => 'Hinh quan sort di bien' , 'product_id' => 5),
            array('name' => 'Hinh quan thung lo' , 'product_id' => 6),
            array('name' => 'Hinh quan thung lo to' , 'product_id' => 6),
            array('name' => 'Hinh tui xach 1' , 'product_id' => 8),
        ));
    }
}
