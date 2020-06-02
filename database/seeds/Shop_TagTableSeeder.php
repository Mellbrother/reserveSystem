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
        'shop_id' => 2,
        'tag_id' => 4,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 3,
        'tag_id' => 5,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 4,
        'tag_id' => 6,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 5,
        'tag_id' => 7,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 6,
        'tag_id' => 2,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 7,
        'tag_id' => 3,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 8,
        'tag_id' => 4,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 9,
        'tag_id' => 5,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 10,
        'tag_id' => 6,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 11,
        'tag_id' => 1,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 12,
        'tag_id' => 2,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 13,
        'tag_id' => 4,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 14,
        'tag_id' => 6,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 15,
        'tag_id' => 7,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 16,
        'tag_id' => 1,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 17,
        'tag_id' => 3,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 18,
        'tag_id' => 4,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 19,
        'tag_id' => 5,
      ];
      DB::table('shop_tag')->insert($param);
        
      $param=[
        'shop_id' => 20,
        'tag_id' => 6,
      ];
      DB::table('shop_tag')->insert($param);
    }
}
