<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
use App\Customer;
use App\Clerk;
use App\Admin;
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
        $items = Reserve::where('shop_id', $request->shop_id)->get();
        $param = ['shop_id' => $request->shop_id, 'items' => $items];
        return view('admin.reserve_by_shopId', $param);
    }

    //予約の削除
    public function destroyReserve(Request $request)
    {
        // "checkbox"はチェックされた予約の配列
        Reserve::destroy($request->checkbox);
        return redirect('/admin/home');
    }
    
    //customerの編集画面に飛ぶ
    public function customerEdit(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        return view('admin.user_edit', ['form' => $customer, 'type' => 'customer']);
    }
    
    //clerkの編集画面に飛ぶ
    public function clerkEdit(Request $request)
    {
        $clerk = Clerk::where('email', $request->email)->first();
        return view('admin.user_edit', ['form' => $clerk, 'type' => 'clerk']);
    }
    
    //admin自身の編集画面に飛ぶ
    public function accountEdit(Request $request)
    {
        $id = Auth::guard('admin')->user()->id;
        $account = Admin::find($id);
        return view('admin.account_edit', ['account' => $account]);
    }
    
    //アカウント情報の更新
    public function accountUpdate(Request $request)
    {
        $this->validate($request, Admin::$rules);
        $account = Admin::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $account->fill($form)->save();
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
        $items = Tag::all();
        return view('admin.tag_create', ['items' => $items]);
    }

    //タグの追加を行う
    public function storeTag(Request $request)
    {
        $this->validate($request, Tag::$rules);
        $tag = new Tag;
        $form = $request->all();
        unset($form['_token']);
        $tag->fill($form)->save();
        return redirect('/admin/createTag');
    }
    
    //タグの削除を行う
    public function deleteTag(Request $request)
    {
        Tag::destroy($request->checkbox);
        return redirect('/admin/createTag');
    }
}
