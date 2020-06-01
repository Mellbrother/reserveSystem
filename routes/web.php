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

Route::resource('shop', 'ShopController');
Route::resource('reserve', 'ReserveController');
Route::resource('tag', 'TagController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
|Customer 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'customer'], function() {
    Route::get('login',     'Customer\LoginController@showLoginForm')->name('customer.login');
    Route::post('login',    'Customer\LoginController@login');

    Route::get('register', 'Customer\RegisterController@showRegistrationForm')->name('customer.register');
    Route::post('register', 'Customer\RegisterController@register');
    Route::get('home', 'CustomerController@home')->name('customer.home');
    Route::post('searchResult', 'CustomerController@showSearchResult');
    Route::get('shop/{shop_id}', 'CustomerController@showShopDetail');
});

/*
|--------------------------------------------------------------------------
| Customer ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'customer', 'middleware' => 'auth:customer'], function() {
    Route::post('logout',   'Customer\LoginController@logout')->name('customer.logout');
    Route::get('reserve/shop/{shop_id}', 'CustomerController@showReservePage');
    Route::post('reserve/shop/{shop_id}', 'CustomerController@reserve');
});



/*
|--------------------------------------------------------------------------
| clerk 認証不要
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'clerk'], function() {
    Route::get('login',     'Clerk\LoginController@showLoginForm')->name('clerk.login');
    Route::post('login',    'Clerk\LoginController@login');
    Route::get('register', 'Clerk\RegisterController@showRegistrationForm')->name('clerk.register');
    Route::post('register', 'Clerk\RegisterController@register');
});

/*
|--------------------------------------------------------------------------
| Clerk ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'clerk', 'middleware' => 'auth:clerk'], function() {
    Route::post('logout',   'Clerk\LoginController@logout')->name('clerk.logout');
    Route::get('home',      'ClerkController@home')->name('clerk.home');
    Route::get('searchReserve', 'ClerkController@shopReserve');
    Route::get('shopCreate', 'ClerkController@shopCreate');
    Route::post('shopStore', 'ClerkController@shopStore');
    Route::get('shopEdit', 'ClerkController@shopEdit');
    Route::post('shopUpdate', 'ClerkController@shopUpdate');
    Route::get('tagCreate', 'ClerkController@tagEdit');
    Route::post('tagStore', 'ClerkController@tagRegister');
});



/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',         function () { return redirect('/admin/home'); });
    Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login',    'Admin\LoginController@login');
});

/*
|--------------------------------------------------------------------------
| 4) Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home', 'AdminController@home')->name('admin.home');
    Route::get('findReserve', 'AdminController@findReserveByShopId');
    Route::post('destroyReserve', 'AdminController@destroyReserve');
    Route::post('customerEdit', 'AdminController@customerEdit');
    Route::post('clerkEdit', 'AdminController@clerkEdit');
    Route::post('userUpdate', 'AdminController@userUpdate');
    Route::post('customerDelete', 'AdminController@customerDelete');
    Route::post('clerkDelete', 'AdminController@clerkDelete');
    Route::get('createTag', 'AdminController@createTag');
    Route::post('storeTag', 'AdminController@storeTag');
    Route::post('deleteTag', 'AdminController@deleteTag');
});
