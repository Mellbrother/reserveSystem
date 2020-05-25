<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param[
        'user_id' => 11,
        'name' => '辻　憲一',
      ];
      DB::table('customers')->insert($param);

      $param[
        'user_id' => 12,
        'name' => '落合　あき',
      ];
      DB::table('customers')->insert($param);

      $param[
        'user_id' => 14,
        'name' => '中村　哲志',
      ];
      DB::table('customers')->insert($param);

      $param[
        'user_id' => 15,
        'name' => '寺本　千里',
      ];
      DB::table('customers')->insert($param);

      $param[
        'user_id' => 16,
        'name' => '八木　佳樹',
      ];
      DB::table('customers')->insert($param);
    }
}
