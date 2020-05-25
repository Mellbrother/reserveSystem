<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Reserve;

class ClerkController extends Controller
{
    public function home($id){
    	return view('clerk.home');
    }

    public function showReserve($id){
    	$reserves = Reserve::where('clerk_id', $id)->get();
    	return view('clerk.reserve', ['reserves' => $reserves]);
    }

    public function shopCreate($id){
    	return view('clerk.create');
    }

    public function shopStore(Request $request, $id){
    	$this->validate($request, Shop::$rules);
        $shop = new Shop;
        unset($form['_token']);
        $shop->fill($form)->save();
        return redirect('/clerk/'.$id);
    }

}
