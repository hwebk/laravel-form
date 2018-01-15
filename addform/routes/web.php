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

Route::group(['as' => 'from::'], function() {
    //入力
    Route::get('/input', ['as' => 'input', 'uses' => 'FormController@input']);
    //完了
    Route::post('/save', ['as' => 'save', 'uses' => 'FormController@save']);
});
