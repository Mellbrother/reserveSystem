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

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function home(Request $request)
    {
        $tags = Tag::all();
        $stations = Station::all();
        $shops = Shop::all();

        $param = [
          'tags' => $tags,
          'stations' => $stations,
          'shops' => $shops,
        ];
        return view('customer.home', $param);
      }

    public function showSearchResult(Request $request)
    {


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

        if($request->tags != null){

          $tag_shops = collect();
          $tag_ids = $request->tags;

          foreach ($tag_ids as $tag_id) {
              $tag = Tag::find($tag_id);
              $tag_shops = $tag_shops->merge($shops->intersect($tag->shops));
          }
          $shops = $tag_shops->unique();
        }

      }

      $stations = Station::all();
      $tags = Tag::all();

      $param = [
        'name' => $request->name,
        'shops' => $shops,
        'tags' => $tags,
        'stations' => $stations
       ];
        return view('customer.search_result', $param);
     }

    public function showShopDetail($shop_id)
    {
        /*shop_idをセッションに保存*/
        session(['key' => $shop_id]);
        session()->put((['key' => $shop_id]));

        $shop = Shop::where('id', $shop_id)->first();
        $param = [
          'shop_id' => $shop_id,
          'shop' => $shop
        ];
        return view('customer.shop_detail', $param);
    }

    public function showReservePage($shop_id)
    {
        $id = Auth::guard('customer')->user()->id;
        $shop = Shop::where('id', $shop_id)->first();
        $open = $shop->open;
        $close = $shop->close;


        $start = new DateTime($open);
        $end =  new DateTime($close);

        $date_interval = new DateInterval('PT1H');

        $date_period = new DatePeriod($start, $date_interval, $end);

        $param = [
          "id" => $id,
          "shop_id" => $shop_id,
          "date_period" => $date_period
        ];
        return view('customer.reserve', $param);
      }


    public function reserve(Request $request)
    {
        $id = Auth::guard('customer')->user()->id;
        $shop_id = session('key');
        $shop_name = Shop::find($request->shop_id)->name;
        $this->validate($request, Reserve::$rules);
        $reserve = new Reserve;

        $time = $request->date
                  . ' '
                  . $request->reserve_time
                  . ':00';

        $datetime = new Datetime($time);

        $form = $request->all();
        $form += ['customer_id' => $id, 'shop_id' => $shop_id, 'shop_name' => $shop_name, 'datetime' => $datetime];
        unset($form['reserve_time']);
        unset($form['date']);

        unset($form['_token']);
        $reserve->fill($form)->save();
        return redirect('/customer/home');
    }

    public function reserveList(Request $request)
    {
      $id = Auth::guard('customer')->user()->id;
      $reserves = Reserve::where('customer_id', $id)
            ->orderBy('datetime', 'asc')->get();
      // foreach($reserves as $reserve){
      //   $shop = Shop::find($reserve->shop_id);
      //   $reserve = $reserve->array_merge(['shop_name' => $shop->name]);
      // }
        $param = [
            'id' => $id,
            'items' => $reserves
        ];
      return view('customer.reserve_list', $param);
    }
}
