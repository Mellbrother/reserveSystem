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
          'name' => '島袋　由香里',
          'email' => 'id1@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('admins')->insert($param);

        $param=[
          'name' => '畔柳　寿美代',
          'email' => 'id2@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('admins')->insert($param);

        $param=[
          'name' => '金本　智紀',
          'email' => 'id3@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('admins')->insert($param);
        $param=[
          'name' => '平山　芳根',
          'email' => 'id4@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('admins')->insert($param);

        $param=[
          'name' => '前原　富佐次',
          'email' => 'id5@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('admins')->insert($param);
    }
}
