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

Route::get('/','PagesController@home');

Route::get('/shop','PagesController@shop');

Route::get('/contact','PagesController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop/item/{id}','CheckoutController@item');

Route::get('/cart','CheckoutController@cart');

Route::get('/account','CheckoutController@account')->name('account');

Route::get('/checkout','CheckoutController@checkout')->name('checkout');

Route::get('/remove/{id}','CheckoutController@remove');

Route::post('/valcheckout','CheckoutController@valcheckout');

Route::get('/editaddress','CheckoutController@editaddress');

Route::get('/payment','PaymentController@payment')->name('payment');

Route::get('/searchtype','SearchController@searchtype');

Route::get('/searchtypewomen','SearchController@searchtypewomen');

Route::get('/searchbrand','SearchController@searchbrand');

Route::get('/searchprice','SearchController@searchprice');

Route::post('/pay','PaymentController@pay');

Route::get('/paywithcredit','PaymentController@paywithcredit')->name('paywithcredit');
Route::get('/paywithcod','PaymentController@paywithcod')->name('paywithcod');
Route::get('/paywithpaypal','PaymentController@paywithpaypal')->name('paywithpaypal');


Route::post('/stripe','PaymentController@stripe');

Route::get('/stripecharge','PaymentController@stripecharge')->name('stripecharge');