<?php
    
require_once 'vendor/fzaninotto/faker/src/autoload.php';

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
        $faker = Faker\Factory::create('ja_JP');
        
      $param=[
        'name' => $faker->name,
        'email' => 'id20@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('clerks')->insert($param);

      $param=[
        'name' => $faker->name,
        'email' => 'id21@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id22@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);

      $param=[
        'name' => $faker->name,
        'email' => 'id23@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('clerks')->insert($param);

      $param=[
        'name' => $faker->name,
        'email' => 'id24@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('clerks')->insert($param);

      $param=[
        'name' => $faker->name,
        'email' => 'id25@gmail.com',
        'password' => bcrypt('password'),
      ];
      DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id26@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id27@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id28@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id29@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id30@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id31@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id32@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id33@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id34@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id35@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id36@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id37@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id38@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
        
        $param=[
          'name' => $faker->name,
          'email' => 'id39@gmail.com',
          'password' => bcrypt('password'),
        ];
        DB::table('clerks')->insert($param);
    }
}
