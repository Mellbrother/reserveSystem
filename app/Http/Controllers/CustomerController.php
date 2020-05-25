<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Reserve;

class CustomerController extends Controller
{
    public function home($id)
    {
        return view('customer.home');
    }

    public function showSearchResult(Request $request)
    {

        $shops = Shop::where('name', $request->name)->get();

        // $shops = Shop::lunchMinPrice($request->lunchmin)
        //             ->lunchMaxPrice($request->lunchmax)
        //             ->dinnerMinPrice($request->dinnermin)
        //             ->dinnerMaxPrice($request->dinnermax)
        //             ->Station($request->station)->get();

        $param = ['name' => $request->name, 'shops' => $shops];
        return view('customer.search_result', $param);
    }

    public function showShopDetail($id, $shop_id)
    {
        $shop = Shop::where('id', $shop_id)->first();
        return view('customer.shop_detail', ['shop' => $shop]);
    }

    public function showReservePage($id, $shop_id)
    {
        return view('customer.reserve', ["id" => $id, "shop_id" => $shop_id]);
    }

    public function reserve(Request $request, $id, $shop_id)
    {
        $this->validate($request, Reserve::$rules);
        $reserve = new Reserve;
        $tmp = [
                'customer_id' => $id,
                'shop_id'     => $shop_id,
            ];
        $form = $request->all() + $tmp;
            
        unset($form['_token']);
        $reserve->fill($form)->save();
        return redirect('/tag');
    }
}
