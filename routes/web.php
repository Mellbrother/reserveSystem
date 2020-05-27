<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('shop', 'ShopController');
Route::resource('reserve', 'ReserveController');
Route::resource('tag', 'TagController');



Route::get('/customer/{id}/home', 'CustomerController@home');
Route::post('/customer/{id}/searchResult', 'CustomerController@showSearchResult');
Route::get('/customer/{id}/shop/{shop_id}', 'CustomerController@showShopDetail');

//顧客認証必要ページ
Route::group(['prefix' => 'customer', 'middleware' => 'auth:customer'], function(){

Route::post('{id}/reserve/shop/{shop_id}', 'CustomerController@reserve')->name('customer.reserve');
Route::get('{id}/reserve/{shop_id}', 'CustomerController@showReservePage')->name('customer.reserve');

});

//店舗責任者認証必要ページ
Route::group(['prefix' => 'clerk', 'middleware' => 'auth:clerk'], function(){

Route::get('{id}/home', 'ClerkController@home')->name('clerk.home');
Route::get('{id}/searchReserve', 'ClerkController@shopReserve')->name('clerk.searchResult');
Route::get('{id}/shopCreate', 'ClerkController@shopCreate')->name('clerk.shopCreate');
Route::post('{id}/shopStore', 'ClerkController@shopStore')->name('clerk.shopStore');

});

//管理者認証必要ページ
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){

Route::get('{id}/home', 'AdminController@home')->name('admin.home');
Route::post('{id}/findReserve', 'AdminController@findReserveByShopId')->name('admin.findReserve');
Route::post('{id}/destroyReserve', 'AdminController@destroyReserve')->name('admin.destroyReserve');
Route::post('{id}/userEdit', 'AdminController@userEdit')->name('admin.userEdit');
Route::post('{id}/userUpdate', 'AdminController@userUpdate')->name('admin.userUpdate');
Route::post('{id}/userDelete', 'AdminController@userDelete')->name('admin.userDelete');
Route::get('{id}/createTag', 'AdminController@createTag')->name('admin.createTag');
Route::post('{id}/storeTag', 'AdminController@storeTag')->name('admin.storeTag');

});


Route::get('/home', 'HomeController@index')->name('home');
