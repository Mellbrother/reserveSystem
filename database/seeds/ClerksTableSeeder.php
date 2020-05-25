<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClerksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param=[
        'user_id' => 6,
        'name' => '畔柳　貴俊',
      ];
      DB::table('clerks')->insert($param);

      $param=[
        'user_id' => 7,
        'name' => '三矢　群太',
      ];
      DB::table('clerks')->insert($param);

      $param=[
        'user_id' => 8,
        'name' => '早藤　君枝',
      ];
      DB::table('clerks')->insert($param);

      $param=[
        'user_id' => 9,
        'name' => '藤井　文寿',
      ];
      DB::table('clerks')->insert($param);

      $param=[
        'user_id' => 10,
        'name' => '水谷　恵子',
      ];
      DB::table('clerks')->insert($param);
    }
}
