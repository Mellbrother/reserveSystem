<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
      'shop_id' => '1',
      'photo' => '/storage/store_photo/izakaya1_man.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '1',
      'photo' => '/storage/store_photo/izakaya2_tatemono.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '1',
      'photo' => '/storage/store_photo/izakaya3_taimen_acrylic_syokuji.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '1',
      'photo' => '/storage/store_photo/wasilyoku1_syokuji_india_man.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '1',
      'photo' => '/storage/store_photo/wasilyoku2_bousai_nikujaga.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '6',
      'photo' => '/storage/store_photo/wasilyoku3_syokuji_couple_smile.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '7',
      'photo' => '/storage/store_photo/Korean-food1_cheese_takkarubi.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '8',
      'photo' => '/storage/store_photo/Korean-food2_toppogi.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '9',
      'photo' => '/storage/store_photo/Korean-food3_ishiyaki_bibinba.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '10',
      'photo' => '/storage/store_photo/cheap1_onigiri_maru.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '11',
      'photo' => '/storage/store_photo/cheap2_food_sandwitch.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '12',
      'photo' => '/storage/store_photo/Near-station1_money_tip_restaurant.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '13',
      'photo' => '/storage/store_photo/Near-station2_counter_ramen_man.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '14',
      'photo' => '/storage/store_photo/Private-room1_syokuji_wasabi_hana_man.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '15',
      'photo' => '/storage/store_photo/Private-room2_drink_ume_juice.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '16',
      'photo' => '/storage/store_photo/Women-Association1_nomikai_joshikai.png'
    ];
    DB::table('photos')->insert($param);

    $param = [
      'shop_id' => '17',
      'photo' => '/storage/store_photo/Women-Association2_hanami_girls.png'
    ];
    DB::table('photos')->insert($param);
    }
}
