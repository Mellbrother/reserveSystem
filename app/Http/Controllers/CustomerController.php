<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Reserve;
use App\Tag;
use App\Station;

class CustomerController extends Controller
{
      //    検索なのに$idがいるか?
    public function home(Request $request, $id)
    {

        $tags = Tag::all();
        $stations = Station::all();
        $shops = Shop::all();

        $param = [
          'tags' => $tags,
          'id' => $id,
          'stations' => $stations,
          'shops' => $shops,
        ];
        return view('customer.home', $param);
      }

    public function showSearchResult(Request $request, $id)
    {
      if ($request->name != null){
        $shops = Shop::where('name', $request->name)->get();
      } else {

        $shops = Shop::station($request->station);
        if($request->tag != ""){
          $shops = Tag::where('name', $request->tag)->first()->shops();
        }

        if($request->price != ""){
          preg_match('/(\d+)~(\d+)/', $request->price, $result);
          $min_price = $result[1];
          $max_price = $result[2];
          $shops = $shops->lunchMinPrice($min_price)
                      ->lunchMaxPrice($max_price);
        }
        $shops = $shops->get();
      }

        $param = [
          'name' => $request->name,
          'shops' => $shops,
          'id' => $id
         ];
        return view('customer.search_result', $param);
     }

    public function showShopDetail($id, $shop_id)
    {
        $shop = Shop::where('id', $shop_id)->first();
        return view('customer.shop_detail', ['shop' => $shop]);
    }

    public function showReservePage(Request $request, $id, $shop_id)
    {
        $opens = Shop::find($shop_id)->open;
        $closes = Shop::find($shop_id)->close;
        preg_match('/(\d+):(\d+)/', $opens, $result_open);
        $hour_open = $result_open[1];

        preg_match('/(\d+):(\d+)/', $closes, $result_close);
        $hour_close = $result_close[1];

        $start = new DateTime();
        $end = new DateTime();

        $start->setTime($hour_open);
        $end->setTime($hour_close);

        $date_interval = new DateInterval('PT1H');

        $date_period = new DatePeriod($start, $date_interval, $end);

        foreach ($date_period as $key->$val){
            $time = ["date_period" => $date_period];
        }

        $param = [
          "id" => $id,
          "shop_id" => $shop_id,
          "date_period" => "$date_period"
        ];

        return view('customer.reserve', $param, $time);
    }

    public function reserve(Request $request, $id, $shop_id)
    {

        $this->validate($request, Reserve::$rules);
        $reserve = new Reserve;

        $form = $request->all();
        $form += ['customer_id' => $id, 'shop_id' => $shop_id];
        unset($form['_token']);
        $reserve->fill($form)->save();
        return redirect('/customer/'.$id.'/home');
    }
}
