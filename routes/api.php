<?php

use Illuminate\Http\Request;

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

Route::post('login', function (Request $request) {
    $data = $request->only('email', 'password');
    $token = \Auth::guard('api')->attempt($data);

    if (!$token) {
        return response()->json([
            'error' => 'Credential invalid'
        ], 400);
    } else {
        return ['token' => $token];
    }
});

Route::group(['middleware' => 'auth:api'], function (){

    Route::resource('/category','CategoryController');
    Route::resource('/product','ProductController');
    Route::resource('/customer','CustomerController');
    Route::resource('/payment_type','PaymentTypeController');
    Route::resource('/discount_coupon','DiscountCouponController');
    Route::resource('/order','OrderController');
    Route::resource('/funne','FunneController');
    Route::resource('/sale','SaleController');

});



