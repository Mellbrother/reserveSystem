<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Shop_TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param=[
        'shop_id' => 1,
        'tag_id' => 1,
      ];
      DB::table('shop_tag')->insert($param);

      $param=[
        'shop_id' => 1,
        'tag_id' => 3,
      ];
      DB::table('shop_tag')->insert($param);

      $param=[
        'shop_id' => 2,
        'tag_id' => 1,
      ];
      DB::table('shop_tag')->insert($param);

      $param=[
        'shop_id' => 2,
        'tag_id' => 4,
      ];
      DB::table('shop_tag')->insert($param);

      $param=[
        'shop_id' => 2,
        'tag_id' => 6,
      ];
      DB::table('shop_tag')->insert($param);
    }
}
