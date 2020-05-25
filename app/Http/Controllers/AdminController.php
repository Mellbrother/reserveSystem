<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
use App\User;
use App\Tag;

class AdminController extends Controller
{
    public function home($id)
    {
        return view('admin.home', ['id' => $id]);
    }
    
    public function findReserveByShopId(Request $request, $id)
    {
        $items = Reserve::where('shop_id', $request->shop_id)->get();
        $param = ['shop_id' => $request->shop_id, 'items' => $items, 'id' => $id];
        return view('admin.reserve_by_shopId', $param);
    }
    
    public function destroyReserve(Request $request, $id)
    {
        // "checkbox"はチェックされた予約の配列
        Reserve::destroy($request->checkbox);
        return redirect('/admin/'.$id.'/findReserve');
    }
    
    public function userEdit(Request $request, $id)
    {
        // 編集するユーザーをどう指定するか？
        $user = User::find($request->user_id);
        return view('admin.user_edit', ['form' => $user, 'id' => $id]);
    }
    
    public function userUpdate(Request $request, $id)
    {
        $this->validate($request, User::$rules);
        $user = User::find($request->id);
        $form = $request->all();
        unset($form['_token ']);
        $user->fill($form)->save();
        return redirect('/admin/'.$id.'/home');
    }
    
    public function userDelete(Request $request, $id)
    {
        User::find($request->id)->delete();
        return redirect('/admin/'.$id.'/home');
    }
    
    public function createTag($id)
    {
        return view('admin.tag_create', ['id' => $id]);
    }
    
    public function storeTag(Request $request, $id)
    {
        $this->validate($request, Tag::$rules);
        $tag = new Tag;
        $form = $request->all();
        unset($form['_token']);
        $tag->fill($form)->save();
        return redirect('/admin/'.$id.'/createTag');
    }
}
