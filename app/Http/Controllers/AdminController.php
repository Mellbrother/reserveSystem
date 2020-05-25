<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }
    
    public function findReserveByShopId(Request $request)
    {
        $item = Reserve::shopId($request->input)->get();
        $param = ['input' => $request->input, 'item' => $item];
        // リダイレクト先未定
        return view('admin.reserve_by_shopId', $param);
    }
    
    public function destroyReserve(Request $request)
    {
        // 削除するReserveをどう指定するか？
        Reserve::find($request->input)->delete();
        // リダイレクト先未定
        return redirect('/');
    }
    
    public function userEdit(Request $request)
    {
        // 編集するユーザーをどう指定するか？
        $user = User::find($request->input);
        return view('admin.user_edit', ['form' => $user]);
    }
    
    public function userUpdate(Request $request)
    {
        $this->validate($request, User::$rules);
        $user = User::find($request->id);
        $form = $request->all();
        unset($form['_token ']);
        $person->fill($form)->save();
        // リダイレクト先未定
        return redirect('/');
    }
    
    public function userDelete(Request $request)
    {
        User::find($request->id)->delete();
        // リダイレクト先未定
        return redirect('/');
    }
    
    public function createTag()
    {
        return view('admin.tag_create');
    }
    
    public function storeTag(Request $request)
    {
        $this->validate($request, Tag::$rules);
        $tag = new Tag;
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        // リダイレクト先未定
        return redirect('/');
    }
}
