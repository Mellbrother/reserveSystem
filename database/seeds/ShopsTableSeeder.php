<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
          'clerk_id' => 1,
          'name' => 'shop1',
          'place_address' => '千葉県山武市松尾町猿尾585-15',
          'lunch_price' => 800,
          'dinner_price' => 1000,
          'seat_num' => 30,
          'open' => '10:00',
          'close' => '22:00',
          'average_stay_minute' => 60,
          'station' => '新宿',
          'walk_minute' => 15,
        ];
        DB::table('shops')->insert($param);

        $param=[
          'clerk_id' => 2,
          'name' => 'shop2',
          'place_address' => '千葉県山武市松尾町猿尾585-15',
          'lunch_price' => 800,
          'dinner_price' => 1000,
          'seat_num' => 30,
          'open' => '10:00',
          'close' => '22:00',
          'average_stay_minute' => 60,
          'station' => '新宿',
          'walk_minute' => 15,
        ];
        DB::table('shops')->insert($param);

        $param=[
          'clerk_id' => 3,
          'name' => 'shop3',
          'place_address' => '広島県三次市作木町大山48-18',
          'lunch_price' => 500,
          'dinner_price' => 1700,
          'seat_num' => 50,
          'open' => '15:00',
          'close' => '25:00',
          'average_stay_minute' => 30,
          'station' => '小田原',
          'walk_minute' => 4,
        ];
        DB::table('shops')->insert($param);

        $param=[
          'clerk_id' => 4,
          'name' => 'shop4',
          'place_address' => '沖縄県国頭郡国頭村伊地570-11',
          'lunch_price' => 300,
          'dinner_price' => 900,
          'seat_num' => 15,
          'open' => '08:00',
          'close' => '18:00',
          'average_stay_minute' => 20,
          'station' => '生田',
          'walk_minute' => 12,
        ];
        DB::table('shops')->insert($param);

        $param=[
          'clerk_id' => 5,
          'name' => 'shop5',
          'place_address' => '静岡県沼津市内浦重須866-8',
          'lunch_price' => 1000,
          'dinner_price' => 3000,
          'seat_num' => 45,
          'open' => '9:00',
          'close' => '23:00',
          'average_stay_minute' => 70,
          'station' => '代々木上原',
          'walk_minute' => 10,
        ];
        DB::table('shops')->insert($param);
    }
}
