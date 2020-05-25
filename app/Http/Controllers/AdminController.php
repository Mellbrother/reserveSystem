<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
use App\User;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }
    
    public function findReserveByShopId(Request $request)
    {
        $items = Reserve::shopId($request->input)->get();
        $param = ['input' => $request->input, 'item' => $items];
        return view('admin.reserve_by_shopId', $param);
    }
    
    public function destroyReserve(Request $request, $id)
    {
        // "checkbox"はチェックされた予約の配列
        Reserve::destroy($request->checkbox);
        return redirect('/admin/{{$id}}/findReserve');
    }
    
    public function userEdit(Request $request)
    {
        // 編集するユーザーをどう指定するか？
        $user = User::find($request->input);
        return view('admin.user_edit', ['form' => $user]);
    }
    
    public function userUpdate(Request $request, $id)
    {
        $this->validate($request, User::$rules);
        $user = User::find($request->id);
        $form = $request->all();
        unset($form['_token ']);
        $user->fill($form)->save();
        return redirect('/admin/{{$id}}/home');
    }
    
    public function userDelete(Request $request, $id)
    {
        User::find($request->id)->delete();
        return redirect('/admin/{{$id}}/home');
    }
    
    public function createTag()
    {
        return view('admin.tag_create');
    }
    
    public function storeTag(Request $request, $id)
    {
        $this->validate($request, Tag::$rules);
        $tag = new Tag;
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return redirect('/admin/{{$id}}/createTag');
    }
}
