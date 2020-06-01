<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
use App\Customer;
use App\Clerk;
use App\Tag;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //adminのホーム
    public function home()
    {
      $id = Auth::guard('admin')->user()->id;
      return view('admin.home', ['id' => $id]);
    }

    //ショップをID検索
    public function findReserveByShopId(Request $request)
    {
        $id = Auth::guard('admin')->user()->id;
        $items = Reserve::where('shop_id', $request->shop_id)->get();
        $param = ['shop_id' => $request->shop_id, 'items' => $items, 'id' => $id];
        return view('admin.reserve_by_shopId', $param);
    }

    //予約の削除
    public function destroyReserve(Request $request)
    {
        // "checkbox"はチェックされた予約の配列
        Reserve::destroy($request->checkbox);
        return redirect('/admin/findReserve');
    }

    
    //customerの編集画面に飛ぶ
    public function customerEdit(Request $request, $id)
    {
        //$request->id はemailに変更予定
        $customer = Customer::find($request->id);
        return view('admin.user_edit', ['form' => $customer, 'id' => $id, 'type' => 'customer']);
    }
    
    //clerkの編集画面に飛ぶ
    public function clerkEdit(Request $request, $id)
    {
        //$request->id はemailに変更予定
        $clerk = Clerk::find($request->id);
        return view('admin.user_edit', ['form' => $clerk, 'id' => $id, 'type' => 'clerk']);
    }
    

    //ユーザー情報の更新
    public function userUpdate(Request $request)
    {
        $id = Auth::guard('admin')->user()->id;
        $this->validate($request, User::$rules);
        $user = User::find($request->id);
        $form = $request->all();
        unset($form['_token ']);
        $user->fill($form)->save();
        return redirect('/admin/home');
    }

    
    //customer情報の削除
    public function customerDelete(Request $request)
    {
        $id = Auth::guard('admin')->user()->id;
        Customer::find($request->id)->delete();
        return redirect('/admin/home');
    }
    
    //clerk情報の削除
    public function clerkDelete(Request $request)
    {
        $id = Auth::guard('admin')->user()->id;
        Clerk::find($request->id)->delete();
        return redirect('/admin/home');
    }

    //タグの追加画面に飛ぶ
    public function createTag(Request $request)
    {
        $id = Auth::guard('admin')->user()->id;
        $items = Tag::all();
        return view('admin.tag_create', ['id' => $id, 'items' => $items]);
    }

    //タグの追加を行う
    public function storeTag(Request $request)
    {
        $id = Auth::guard('admin')->user()->id;
        $this->validate($request, Tag::$rules);
        $tag = new Tag;
        $form = $request->all();
        unset($form['_token']);
        $tag->fill($form)->save();
        return redirect('/admin/createTag');
    }
    
    public function deleteTag(Request $request, $id)
    {
        Tag::destroy($request->checkbox);
        return redirect('/admin/'.$id.'/createTag');
    }
}
