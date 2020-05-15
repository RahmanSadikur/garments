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

Route::post('/login', 'LoginController@verify');
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
    Route::get('/user/profile', 'LoginController@index')->name('user.profile');


});
Route::get('/', function () {
    return redirect()->route('guest.index');
});
Route::get('/category/showall/{id}', 'CategoryController@showall')->name('category.showall');
Route::get('/subcategory/showall/{cid}', 'SubCategoryController@showall')->name('subcategory.showall');
Route::get('/item/showall/{scid}', 'ItemController@showall')->name('item.showall');
Route::resource('guest','GuestController')->only('index');
Route::Resources([

    'category' => 'CategoryController',
    'subcategory' => 'SubCategoryController',
    'item' => 'ItemController',


]);
