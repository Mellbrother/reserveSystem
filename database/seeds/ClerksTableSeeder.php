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
        'name' => '畔柳　貴俊',
        'email' => 'id6@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('clerks')->insert($param);

      $param=[
        'name' => '三矢　群太',
        'email' => 'id7@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('clerks')->insert($param);

      $param=[
        'name' => '早藤　君枝',
        'email' => 'id8@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('clerks')->insert($param);

      $param=[
        'name' => '藤井　文寿',
        'email' => 'id9@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('clerks')->insert($param);

      $param=[
        'name' => '水谷　恵子',
        'email' => 'id10@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('clerks')->insert($param);
    }
}
