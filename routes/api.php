<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('writerOrder',\App\Http\Controllers\Orders\AssignedOrderToWriter::class);
//Route::apiResource('register',[\App\Http\Controllers\Auth\RegisterController::class,'create']);
Route::post('registerEmp',[\App\Http\Controllers\Auth\RegisterController::class,'registerEmp']);
Route::apiResource('writers',\App\Http\Controllers\WriterController::class);
Route::apiResource('orders',\App\Http\Controllers\Orders\OrderController::class);
