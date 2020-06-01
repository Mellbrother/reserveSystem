<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Reserve;
use App\Tag;
use App\Station;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
      //    検索なのに$idがいるか?
      public function home(Request $request)
      {
        $tags = Tag::all();
        $stations = Station::all();
        $shops = Shop::all();

        $param = [
          'tags' => $tags,
          //'id' => $id,
          'stations' => $stations,
          'shops' => $shops,
        ];
        return view('customer.home', $param);
      }

    public function showSearchResult(Request $request)
    {
      //$id = Auth::guard('customer')->user()->id;

      if ($request->name != null){
        $shops = Shop::where('name', $request->name)->get();
      } else {
        // $result = [];
        $shops = Shop::station($request->station);
        $tags = Tag::where('tag', $request->tag)->frist();
        if($request->price != ""){
          preg_match('/(\d+)~(\d+)/', $request->price, $result);
          $min_price = $result[1];
          $max_price = $result[2];
          $shops = $shops->lunchMinPrice($min_price)
                      ->lunchMaxPrice($max_price);
        }
        $shops = $shops->get();
      }


        $param = ['name' => $request->name, 'shops' => $shops];
        return view('customer.search_result', $param);
     }

    public function showShopDetail($shop_id)
    {
        /*shop_idをセッションに保存*/
        session(['key' => $shop_id]);
        session()->put((['key' => $shop_id]));

        $shop = Shop::where('id', $shop_id)->first();
        return view('customer.shop_detail', ['shop' => $shop]);
    }


    public function showReservePage($shop_id)
    {
        $id = Auth::guard('customer')->user()->id;
        return view('customer.reserve', ["id" => $id, "shop_id" => $shop_id]);
    }

    public function reserve(Request $request)
    {
        $id = Auth::guard('customer')->user()->id;
        $shop_id = session('key');
        $this->validate($request, Reserve::$rules);
        $reserve = new Reserve;

        $form = $request->all();
        $form += ['customer_id' => $id, 'shop_id' => $shop_id];
        unset($form['_token']);
        $reserve->fill($form)->save();
        return redirect('/customer/home');
    }

    public function reserveList(Request $request, $id)
    {
      $reserves = Reserve::where('customer_id', $id)
            ->orderBy('datetime', 'asc')->get();
        $param = [
            'id' => $id,
            'items' => $reserves
        ];
      return view('clerk.reserve', $param);
    }
}
