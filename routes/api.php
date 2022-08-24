<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Entities\UserEntity;

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

//也可以透過 resource 創建API 方便很多

/* 所有用戶 */
Route::get('/user','UserController@UserIndex');
/* 特定用戶 */
Route::get('/user/{id}','UserController@OrderUserIndex');
/* 編輯用戶 null不能用 */
Route::put('/user/{id}','UserController@EditUser');
/* 用戶登入 */
Route::post('/user','UserController@Login');
/* 用戶註冊 */
Route::post('/user/signup','UserController@CreateUser');
/* 所有商品 */
Route::get('/product', 'ProductController@GetAllProducts');
/* 所有訂單 */
Route::get('/payment', 'PaymentController@GetPayment');
/* 訂單細節 */
Route::get('/payment/{id}', 'PaymentController@home');
/* 建立訂單 */
Route::post('/payment', 'PaymentController@home');




