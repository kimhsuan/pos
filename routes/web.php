<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    if(Auth::user()){
        return view('home');
    }else{
        return view('welcome');
    }
});

Auth::routes();

Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/home', ['as' => 'index','uses' => 'HomeController@index']);
});

Route::get('orders', ['as' => 'orders.index','uses' => 'OrderController@index']);
Route::get('orders/new', ['as' => 'orders.new','uses' => 'OrderController@new']);
Route::get('orders/addProduct/{productId}', 'OrderController@addItem');
Route::get('orders/removeItem/{productId}', 'OrderController@removeItem');
Route::get('orders/create', ['as' => 'orders.new','uses' => 'OrderController@create']);
Route::post('orders/save', 'OrderController@save');

Route::get('products', ['as' => 'products.index','uses' => 'ProdController@index']);
Route::get('products/create', ['as' => 'products.create','uses' => 'ProdController@create']);
Route::post('products/save', 'ProdController@save');
Route::get('products/sort', ['as' => 'products.sort','uses' => 'ProdController@sort']);
Route::get('products/newsort', ['as' => 'products.newsort','uses' => 'ProdController@newsort']);
Route::get('products/{id}', ['as' => 'products.show','uses' => 'ProdController@show']);
Route::post('products/update/{id}', 'ProdController@update');
Route::delete('products/delete/{id}', 'ProdController@delete');

Route::get('customers', ['as' => 'customers.index','uses' => 'CustController@index']);
Route::get('customers/create', ['as' => 'customers.create','uses' => 'CustController@create']);
Route::post('customers/save', 'CustController@save');
Route::get('customers/sort', ['as' => 'customers.sort','uses' => 'CustController@sort']);
Route::get('customers/newsort', ['as' => 'customers.newsort','uses' => 'CustController@newsort']);
Route::post('customers/sortadd', 'CustController@sortadd');
Route::get('customers/{id}', ['as' => 'customers.show','uses' => 'CustController@show']);
Route::get('customers/{id}/edit', ['as' => 'customers.edit','uses' => 'CustController@edit']);

Route::get('statistics', ['as' => 'statistics.index','uses' => 'StatController@index']);
Route::get('statistics/inventory', ['as' => 'statistics.inventory','uses' => 'StatController@inventory']);
