<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return App\Model\ProductModel::all();
});
Route::get('/test2', 'ProductController@GetProduct');



/* 所有商品 */
Route::get('/product', 'ProductController@GetAllProducts');
/* 所有訂單 */
Route::get('/payment', 'PaymentController@home');
/* 訂單細節 */
Route::get('/payment/detail', 'PaymentController@home');
/* 建立訂單 */
Route::post('/payment/order', 'PaymentController@home');




