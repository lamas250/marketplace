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

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function(){
    Route::prefix('stores')->name('stores.')->group(function(){
        Route::get('/','StoreController@index')->name('index');
        Route::get('/create','StoreController@create')->name('create');
        Route::post('/','StoreController@store')->name('store');
        Route::get('/edit/{store}','StoreController@edit')->name('edit');
        Route::put('/edit/{store}','StoreController@update')->name('update');
        Route::get('/destroy/{store}','StoreController@destroy')->name('destroy');
    });

    Route::resource('products','ProductController');
});


