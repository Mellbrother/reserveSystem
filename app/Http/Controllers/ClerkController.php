<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Reserve;

class ClerkController extends Controller
{
    public function home($id){
    	return view('clerk.home', ['id' => $id]);
    }

    public function shopReserve($id){
        $shop = Shop::where('clerk_id', $id)->first();
    	$reserves = Reserve::where('shop_id', $shop->id)->get();
    	return view('clerk.reserve', ['items' => $reserves]);
    }

    public function shopCreate($id){
    	return view('clerk.shop_create', ['id' => $id]);
    }

    public function shopStore(Request $request, $id){
    	$this->validate($request, Shop::$rules);
        $shop = new Shop;
        $form = $request->all();
        unset($form['_token']);
        $shop->fill($form)->save();
        return redirect('/clerk/'.$id.'home');
    }

}
