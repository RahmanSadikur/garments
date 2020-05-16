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



Route::get('/login', 'LoginController@index')->name('login.index');


Route::post('/login', 'LoginController@authenticate');


Route::get('/logout', 'logoutController@index')->name('logout.index');

Route::group(['middleware'=>['sess']], function(){
    Route::resource('customer','customerController')->only('index');

    Route::Resources([
        'user' => 'UserController',
        'order' => 'OrderLogController',
        'cart' => 'OrderItemController',
        'payment' => 'PaymentController',
        'favourite' => 'FavouriteController',

    ]);
    Route::get('/pay/showall', 'PayController@showall')->name('pay.showall');
    Route::any('/payment/index', 'PaymentController@index')->name('payment.index');
    Route::get('/payment/showall', 'PaymentController@showall')->name('payment.showall');

    Route::any('/order/activeorder', 'OrderLogController@activeorder')->name('order.activeorder');
    Route::post('/cart/addcart/{item}', 'OrderItemController@addcart')->name('cart.addcart');
    Route::post('/cart/additemcart', 'OrderItemController@additemcart')->name('cart.additemcart');


});
Route::get('/', function () {
    return redirect()->route('guest.index');
});
Route::get('/category/showall', 'CategoryController@showall')->name('category.showall');
Route::get('/payment/showall', 'PaymentController@showall')->name('payment.showall');
Route::get('/subcategory/showall/{cid}', 'SubCategoryController@showall')->name('subcategory.showall');
Route::get('/item/showall/{scid}', 'ItemController@showall')->name('item.showall');
Route::get('/subcategory/showallc/{cid}', 'SubCategoryController@showallc')->name('subcategory.showallc');
Route::get('/item/showallc/{scid}', 'ItemController@showallc')->name('item.showallc');
Route::get('/item/showaitem/{iid}', 'ItemController@showitem')->name('item.showitem');
Route::get('/item/showaitemg/{iid}', 'ItemController@showitemg')->name('item.showitemg');
Route::get('/item/search', 'ItemController@search')->name('item.search');

Route::resource('guest','GuestController')->only('index');
Route::Resources([

    'category' => 'CategoryController',
    'subcategory' => 'SubCategoryController',
    'item' => 'ItemController',
    'register'=>'RegisterController',



]);



Route::get('/home', 'HomeController@index')->name('home');

