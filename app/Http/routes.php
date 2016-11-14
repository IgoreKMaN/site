<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', ['uses' =>'Home@index', 'as' => 'home']);
Route::get('zap/{id}/zap', ['uses' => 'Home@zap', 'as' => 'zap.zap'])->where(['id' => '[0-9]+']);










