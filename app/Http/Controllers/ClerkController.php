<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Shop;
use App\Reserve;
use App\Clerk;
use App\Tag;

class ClerkController extends Controller
{
    public function home($id){
        $shop = Clerk::find($id)->shop;
        if($shop != null){
            $is_shop_registerd = true;
        }else{
            $is_shop_registerd = false;
        }
        $param = [
            'id' => $id,
            'is_shop_registerd' => $is_shop_registerd,
        ];
    	return view('clerk.home', $param);
    }

    public function shopReserve($id){
        $shop = Shop::where('clerk_id', $id)->first();
    	$reserves = Reserve::where('shop_id', $shop->id)
            ->orderBy('datetime', 'asc')->get();
        $param = [
            'id' => $id,
            'items' => $reserves
        ];
    	return view('clerk.reserve', $param);
    }

    public function shopCreate($id){
        $param = [
            'id'    => $id,
        ];
    	return view('clerk.shop_create', $param);
    }

    public function shopStore(Request $request, $id){
    	$this->validate($request, Shop::$rules);
        $shop = new Shop;
        $form = $request->all();
        unset($form['_token']);
        $shop->fill($form)->save();
        return redirect('/clerk/'.$id.'/home');
    }

    public function shopEdit($id){
        $shop = Clerk::find($id)->shop;
        $param = [
            'id'   => $id,
            'shop' => $shop,
        ];
        return view('clerk.shop_edit', $param);
    }

    public function shopUpdate(Request $request, $id){
        $this->validate($request, Shop::$rules);
        $shop = Clerk::find($id)->shop;
        $form = $request->all();
        unset($form['_token']);
        $shop->fill($form)->save();
        return redirect('/clerk/'.$id.'/home');
    }

    public function tagEdit($id){
        $tags = Tag::all();
        $hasTags = Clerk::find($id)->shop->tags;
        $hasTagIds = [];
        foreach($hasTags as $tag){
            array_push($hasTagIds, $tag->id);
        }
        $param = [
            'id'    => $id,
            'tags'  => $tags,
            'hasTagIds' => $hasTagIds,
        ];
        return view('clerk.tag_create', $param);
    }

    public function tagRegister(Request $request, $id){
        $shop_id = Clerk::find($id)->shop->id;

        $all_tags = Shop::find($shop_id)->tags;

        $all_tag_ids = [];
        foreach($all_tags as $tag){
            array_push($all_tag_ids, $tag->id);
        }

        $tag_ids_for_delete = array_diff($all_tag_ids, $request->tags);
        $tag_ids_for_register = array_diff($request->tags, $all_tag_ids);

        foreach($tag_ids_for_register as $tag_id){
            $param = [
                'shop_id' => $shop_id,
                'tag_id'  => $tag_id
            ];
            DB::table('shop_tag')->insert($param);
        } 

        foreach($tag_ids_for_delete as $tag_id){
            DB::table('shop_tag')->where('shop_id', $shop_id)
                                ->where('tag_id', $tag_id)
                                ->delete();
        }
        return redirect('/clerk/'.$id.'/tagCreate');
    }

}
