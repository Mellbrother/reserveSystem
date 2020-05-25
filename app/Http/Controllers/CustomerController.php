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

    public function search_resuit($id)
    {
        $search = Search::where('')->get();
        return view('customer.searchRresult', ['search' => $serach]);
    }

    public function shop_detail($id, $shop_id)
    {
        $detail = Shop:where('id', 'shop_id')->first();
        return view('customer.shopDetail', ['detail' => $detail]);
    }

    public function reserve(Request $request)
    {
        $this->validate($request, Reserve::$rules);
        $reserve = new reserve;
        unset($form['_token']);
        $reserve->fill($form)->save();
        return redirect('/customer.reserve');
    }

    public function layout($id)
    {

    }
}
