<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Reserve;
use App\Tag;
use App\Station;
use Datetime;
use DateInterval;
use Dateperiod;

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

      $tags = Tag::all();
      $stations = Station::all();

      if ($request->name != null){
        $shops = Shop::where('name', $request->name)->get();
      } else {
        $shops = Shop::station($request->station);

        if($request->price != ""){
          preg_match('/(\d+)~(\d+)/', $request->price, $result);
          $min_price = $result[1];
          $max_price = $result[2];
          $shops = $shops->lunchMinPrice($min_price)
                      ->lunchMaxPrice($max_price);
        }

        $shops = $shops->get();

        if($request->tag != ""){
          for($i=0; $i<count($tags); $i++){
            $shops = Tag::wherein('name', $shops->tag)->get();
          }
        }
        else {
          $shops = $shops->get();
        }
      }



      $param = [
        'name' => $request->name,
        'shops' => $shops,
        'id' => $id,
        'tags' => $tags,
        'stations' => $stations
       ];
        return view('customer.search_result', $param);
     }

    public function showShopDetail($id, $shop_id)
    {
        $shop = Shop::where('id', $shop_id)->first();
        $param = [
          'id' => $id,
          'shop_id' => $shop_id,
          'shop' => $shop
        ];
        return view('customer.shop_detail', $param);
    }

    public function showReservePage($id, $shop_id)
    {
        $shop = Shop::where('id', $shop_id)->first();
        // $open = $shop->open;
        // $close = $shop->close;
        //
        //
        // $start = new DateTime($open);
        // $end =  new DateTime($close);
        //
        // $date_interval = new DateInterval('PT1H');
        //
        // $date_period = new DatePeriod($start, $date_interval, $end);

        $param = [
          "id" => $id,
          "shop_id" => $shop_id,
          // "date_period" => $date_period
        ];

        return view('customer.reserve', $param);
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
