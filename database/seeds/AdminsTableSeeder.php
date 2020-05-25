<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
          'user_id' => 1,
          'name' => '島袋　由香里',
        ];
        DB::table('admins')->insert($param);

        $param=[
          'user_id' => 2,
          'name' => '畔柳　寿美代',
        ];
        DB::table('admins')->insert($param);

        $param=[
          'user_id' => 3,
          'name' => '金本　智紀',
        ];
        DB::table('admins')->insert($param);
        $param=[
          'user_id' => 3,
          'name' => '平山　芳根',
        ];
        DB::table('admins')->insert($param);

        $param=[
          'user_id' => 4,
          'name' => '前原　富佐次',
        ];
        DB::table('admins')->insert($param);
    }
}
