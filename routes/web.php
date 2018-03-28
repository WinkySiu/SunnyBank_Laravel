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

use Illuminate\Support\Facades\Input;

Route::get('/login', 'LoginController@loginPage');

Route::post('/insertHistory', 'HistoryController@insertHistory');

Route::get('/', function () {
    return view('new_version.inputPage_t');
});

Route::get('/History', 'HistoryController@history_query');

Route::post('/submit', 'HomeController@input_submit');

Route::post('/SetSource', 'HomeController@set_source');

Route::post('/FBSubmit', 'HomeController@fb_query');