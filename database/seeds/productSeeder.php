<?php

use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert(array(
            array('name' => 'quần sort','gia' => 200000,'cate_id' => 1),
            array('name' => 'quần coc','gia' => 100000,'cate_id' => 1),
            array('name' => 'tui xach hin','gia' => 1000000,'cate_id' => 2),
            array('name' => 'tui xach deu','gia' => 400000,'cate_id' => 2),
            array('name' => 'quần sort di bien','gia' => 200000,'cate_id' => 1),

        ));
    }
}
