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
    return view('home');
});

Route::get('/register_api/{key}/{username}','sessionController@register');
Route::get('/activate/{key}','sessionController@activate');
Route::get('/getSessions/{app_key}/{key}','sessionController@getActiveSessions');
Route::get('/get/{key}','sessionController@get');


Route::get('/home/{key}','sessionController@home');


Route::get('/chat/{id_from}/{id_to}','chatController@getChat');
Route::patch('/chat/{id_from}/{id_to}','chatController@getChat');
Route::POST('/chat','chatController@sendMessage');

Route::get('/QR/{size}/{data}','QRController@get');