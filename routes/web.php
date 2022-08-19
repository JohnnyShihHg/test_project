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

Route::get('/hello_world', function () {
    return view('HelloWorld');
});

/* 練習樣板 */
Route::get('/about_us', function () {
    return view('about_us',['name'=>'test_project']);
});
/* 練習名言機器人 */
/* 調用 action 的方法在之後的版本有所變動 */
Route::get('/inspire', 'InspiringController@inspire');