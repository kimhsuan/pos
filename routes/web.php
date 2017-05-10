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

Route::group(['prefix'=>'orders'], function(){
    Route::get('/', ['as' => 'orders.index','uses' => 'OrderController@index']);
    Route::get('/new', ['as' => 'orders.new','uses' => 'OrderController@new']);
    Route::get('/addItem/{productId}', 'OrderController@addItem');
    Route::get('/removeItem/{productId}', 'OrderController@removeItem');
    Route::get('/create', ['as' => 'orders.new','uses' => 'OrderController@create']);
    Route::post('/save', 'OrderController@save');
});

Route::group(['prefix'=>'products'], function(){
    Route::get('/', ['as' => 'products.index','uses' => 'ProdController@index']);
    Route::get('/create', ['as' => 'products.create','uses' => 'ProdController@create']);
    Route::post('/save', 'ProdController@save');
    Route::get('/sort', ['as' => 'products.sort','uses' => 'ProdController@sort']);
    Route::post('/sortadd', 'ProdController@sortadd');
    Route::get('/unit', ['as' => 'products.unit','uses' => 'ProdController@unit']);
    Route::post('/unitadd', 'ProdController@unitadd');
    Route::get('/{id}', ['as' => 'products.show','uses' => 'ProdController@show']);
    Route::post('/update/{id}', 'ProdController@update');
    Route::delete('/delete/{id}', 'ProdController@delete');
});

Route::group(['prefix'=>'customers'], function(){
    Route::get('/', ['as' => 'customers.index','uses' => 'CustController@index']);
    Route::get('/create', ['as' => 'customers.create','uses' => 'CustController@create']);
    Route::post('/save', 'CustController@save');
    Route::get('/sort', ['as' => 'customers.sort','uses' => 'CustController@sort']);
    Route::post('/sortadd', 'CustController@sortadd');
    Route::get('/{id}', ['as' => 'customers.show','uses' => 'CustController@show']);
    Route::get('/{id}/edit', ['as' => 'customers.edit','uses' => 'CustController@edit']);
    Route::delete('/delete/{id}', 'CustController@delete');
});

Route::get('statistics', ['as' => 'statistics.index','uses' => 'StatController@index']);
