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
        //店名の配列。要らないなら削除を
        $shop_name = ["土風炉", "花の舞", "磯丸水産", "塚田農場", "小樽食堂", "ニライカナイ", "うおや一丁", "咲くら", "鳥どり", "ひもの屋", "茜どき", "びすとろ家", "鍛冶屋文蔵", "かっこ", "さかな市場", "芋蔵", "6年4組",
                           "はたごや", "銀の月", "紅とん"];
        
        $param=[
          'clerk_id' => 1,
          'name' => $shop_name[0],
          'place_address' => '青森県北津軽郡中泊町小泊長坂932-4',
          'lunch_price' => 500,
          'dinner_price' => 2000,
          'seat_num' => 10,
          'open' => '09:00',
          'close' => '19:00',
          'average_stay_minute' => 30,
          'station' => '新宿',
          'walk_minute' => 1,
        ];
        DB::table('shops')->insert($param);

        $param=[
          'clerk_id' => 2,
          'name' => $shop_name[1],
          'place_address' => '岩手県釜石市松原町4-124-18',
          'lunch_price' => 2000,
          'dinner_price' => 700,
          'seat_num' => 20,
          'open' => '10:00',
          'close' => '20:00',
          'average_stay_minute' => 60,
          'station' => '新宿',
          'walk_minute' => 3,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 3,
          'name' => $shop_name[2],
          'place_address' => '岐阜県郡上市大和町場皿240-2',
          'lunch_price' => 6500,
          'dinner_price' => 3500,
          'seat_num' => 30,
          'open' => '11:00',
          'close' => '21:00',
          'average_stay_minute' => 30,
          'station' => '新宿',
          'walk_minute' => 5,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 4,
          'name' => $shop_name[3],
          'place_address' => '茨城県行方市麻生452-4',
          'lunch_price' => 4300,
          'dinner_price' => 6500,
          'seat_num' => 40,
          'open' => '09:00',
          'close' => '22:00',
          'average_stay_minute' => 60,
          'station' => '新宿',
          'walk_minute' => 7,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 5,
          'name' => $shop_name[4],
          'place_address' => '徳島県阿南市羽ノ浦町明見294-16',
          'lunch_price' => 8800,
          'dinner_price' => 12000,
          'seat_num' => 50,
          'open' => '10:00',
          'close' => '23:00',
          'average_stay_minute' => 30,
          'station' => '新宿',
          'walk_minute' => 9,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 6,
          'name' => $shop_name[5],
          'place_address' => '兵庫県姫路市西延末371-18',
          'lunch_price' => 7100,
          'dinner_price' => 50000,
          'seat_num' => 60,
          'open' => '11:00',
          'close' => '19:00',
          'average_stay_minute' => 60,
          'station' => '新宿',
          'walk_minute' => 11,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 7,
          'name' => $shop_name[6],
          'place_address' => '滋賀県長浜市永久寺町870-15',
          'lunch_price' => 200,
          'dinner_price' => 5000,
          'seat_num' => 10,
          'open' => '09:00',
          'close' => '20:00',
          'average_stay_minute' => 30,
          'station' => '新宿',
          'walk_minute' => 13,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 8,
          'name' => $shop_name[7],
          'place_address' => '山口県下関市員光町2-203-18',
          'lunch_price' => 800,
          'dinner_price' => 1800,
          'seat_num' => 20,
          'open' => '10:00',
          'close' => '21:00',
          'average_stay_minute' => 60,
          'station' => '新宿',
          'walk_minute' => 15,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 9,
          'name' => $shop_name[8],
          'place_address' => '山形県山形市千代田446-19',
          'lunch_price' => 5000,
          'dinner_price' => 2000,
          'seat_num' => 30,
          'open' => '11:00',
          'close' => '22:00',
          'average_stay_minute' => 30,
          'station' => '新宿',
          'walk_minute' => 1,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 10,
          'name' => $shop_name[9],
          'place_address' => '兵庫県姫路市勝原区宮田38-15',
          'lunch_price' => 500,
          'dinner_price' => 700,
          'seat_num' => 40,
          'open' => '09:00',
          'close' => '23:00',
          'average_stay_minute' => 60,
          'station' => '新宿',
          'walk_minute' => 3,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 11,
          'name' => $shop_name[10],
          'place_address' => '群馬県前橋市公田町392-13',
          'lunch_price' => 2000,
          'dinner_price' => 3500,
          'seat_num' => 50,
          'open' => '10:00',
          'close' => '19:00',
          'average_stay_minute' => 30,
          'station' => '南新宿',
          'walk_minute' => 5,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 12,
          'name' => $shop_name[11],
          'place_address' => '石川県七尾市能登島久木町8-17',
          'lunch_price' => 6500,
          'dinner_price' => 6500,
          'seat_num' => 60,
          'open' => '11:00',
          'close' => '20:00',
          'average_stay_minute' => 60,
          'station' => '南新宿',
          'walk_minute' => 7,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 13,
          'name' => $shop_name[12],
          'place_address' => '秋田県大館市根下戸342-10',
          'lunch_price' => 4300,
          'dinner_price' => 12000,
          'seat_num' => 10,
          'open' => '09:00',
          'close' => '21:00',
          'average_stay_minute' => 30,
          'station' => '南新宿',
          'walk_minute' => 9,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 14,
          'name' => $shop_name[13],
          'place_address' => '大阪府交野市森24-16',
          'lunch_price' => 8800,
          'dinner_price' => 50000,
          'seat_num' => 20,
          'open' => '10:00',
          'close' => '22:00',
          'average_stay_minute' => 60,
          'station' => '南新宿',
          'walk_minute' => 11,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 15,
          'name' => $shop_name[14],
          'place_address' => '愛知県常滑市若松町4-485-13',
          'lunch_price' => 7100,
          'dinner_price' => 5000,
          'seat_num' => 30,
          'open' => '11:00',
          'close' => '23:00',
          'average_stay_minute' => 30,
          'station' => '南新宿',
          'walk_minute' => 13,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 16,
          'name' => $shop_name[15],
          'place_address' => '鳥取県西伯郡伯耆町大殿837-8',
          'lunch_price' => 200,
          'dinner_price' => 1800,
          'seat_num' => 40,
          'open' => '09:00',
          'close' => '19:00',
          'average_stay_minute' => 60,
          'station' => '南新宿',
          'walk_minute' => 15,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 17,
          'name' => $shop_name[16],
          'place_address' => '福島県会津若松市河東町倉橋799-16',
          'lunch_price' => 800,
          'dinner_price' => 2000,
          'seat_num' => 50,
          'open' => '10:00',
          'close' => '20:00',
          'average_stay_minute' => 30,
          'station' => '南新宿',
          'walk_minute' => 1,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 18,
          'name' => $shop_name[17],
          'place_address' => '長野県諏訪郡下諏訪町東町中175-1',
          'lunch_price' => 5000,
          'dinner_price' => 700,
          'seat_num' => 60,
          'open' => '11:00',
          'close' => '21:00',
          'average_stay_minute' => 60,
          'station' => '南新宿',
          'walk_minute' => 3,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 19,
          'name' => $shop_name[18],
          'place_address' => '京都府長岡京市勝竜寺790-18',
          'lunch_price' => 500,
          'dinner_price' => 3500,
          'seat_num' => 10,
          'open' => '09:00',
          'close' => '22:00',
          'average_stay_minute' => 30,
          'station' => '南新宿',
          'walk_minute' => 5,
        ];
        DB::table('shops')->insert($param);
        
        $param=[
          'clerk_id' => 20,
          'name' => $shop_name[19],
          'place_address' => '富山県南砺市小来栖161-17',
          'lunch_price' => 2000,
          'dinner_price' => 6500,
          'seat_num' => 20,
          'open' => '10:00',
          'close' => '23:00',
          'average_stay_minute' => 60,
          'station' => '南新宿',
          'walk_minute' => 7,
        ];
        DB::table('shops')->insert($param);
    }
}
