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

    public function showSearchResult(Request, $request)
    {

        $shops = Shop::lunchMinPrice($request->lunchmin)
                    ->lunchMaxPrice($request->lunchmax)
                    ->dinnerMinPrice($request->dinnermin)
                    ->dinnerMaxPrice($request->dinnermax)
                    ->Station($request->station)->get();

        $param = ['input' => $request->input, 'shops' => $shops];
        return view('customer.searchRresult', $param);
    }

    public function showShopDetail($id, $shop_id)
    {
        $detail = Shop:where('id', 'shop_id')->first();
        return view('customer.shopDetail', ['detail' => $detail]);
    }

    public function showReservePage($id)
    {
        return view('customer.reserve');
    }

    public function reserve(Request $request)
    {
        $this->validate($request, Reserve::$rules);
        $reserve = new reserve;
        unset($form['_token']);
        $reserve->fill($form)->save();
        return redirect('/customer.reserve');
    }
}
