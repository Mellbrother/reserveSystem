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
      $param=[
        'name' => '辻　憲一',
        'email' => 'id11@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('customers')->insert($param);

      $param=[
        'name' => '落合　あき',
        'email' => 'id12@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('customers')->insert($param);

      $param=[
        'name' => '中村　哲志',
        'email' => 'id13@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('customers')->insert($param);

      $param=[
        'name' => '寺本　千里',
        'email' => 'id14@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('customers')->insert($param);

      $param=[
        'name' => '八木　佳樹',
        'email' => 'id15@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('customers')->insert($param);
    }
}
