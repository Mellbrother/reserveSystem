<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
    	$this->call(AdminsTableSeeder::class);
    	$this->call(ClerksTableSeeder::class);
    	$this->call(CustomersTableSeeder::class);
    	$this->call(ReservesTableSeeder::class);
    	$this->call(ShopsTableSeeder::class);
    	$this->call(TagsTableSeeder::class);
      $this->call(UsersTableSeeder::class);
      $this->call(StationsTableSeeder::class);

    }
}
