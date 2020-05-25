<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      for($i = 1; $i <= 15; $i++){
        $param=[
          'email' => 'id$i@gmail.com',
          'password' => 'password',
        ];
        DB::table('users')->insert($param);
       }
        
    }
}
