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
*/
/**
 * 接收表單來新增任務
 */
Route::post('/task', function (Request $request) {
    //
});
Route::get('/', function () {
//    return view('welcome');
});

/**
 * 刪除任務
 */
Route::delete('/task/{id}', function ($id) {
    //
});
