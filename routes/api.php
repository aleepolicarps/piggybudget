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

Route::get('webid/{publc_id}', 'WebIdController@get');
Route::post('attempt-register', 'Auth\RegisterController@attempt_register');
Route::post('complete-signup', 'Auth\RegisterController@complete_signup');
Route::post('unsubscribe', 'SubscriptionController@unsubscribe');
Route::post('request-refund', 'PaymentsController@request_refund');
Route::post('refund-request-status', 'Admin\RefundRequestsController@change_refund_request_status');
Route::post('refund', 'Admin\RefundRequestsController@refund');
