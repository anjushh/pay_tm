<?php

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

Route::get('/payments', 'PayWalletController@pay')->name('pay');
Route::post('/payments-store', 'PayWalletController@store')->name('pay.store');
Route::get('/return', 'PayWalletController@response')->name('response');

Route::post('/paytm-callback','PayWalletController@paytmCallback');
