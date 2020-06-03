<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param=[
        'customer_id' => 2,
        'customer_name' => '',
        'shop_id' => 1,
        'shop_name' => '',
        'datetime' => '2020-05-30 18:00:00',
        'people_num' => 3
      ];
      DB::table('reserves')->insert($param);

      $param=[
        'customer_id' => 3,
        'customer_name' => '',
        'shop_id' => 1,
        'shop_name' => '',
        'datetime' => '2020-06-03 11:30:00',
        'people_num' => 4
      ];
      DB::table('reserves')->insert($param);

      $param=[
        'customer_id' => 5,
        'customer_name' => '',
        'shop_id' => 3,
        'shop_name' => '',
        'datetime' => '2020-05-28 20:00:00',
        'people_num' => 7
      ];
      DB::table('reserves')->insert($param);
    }
}
