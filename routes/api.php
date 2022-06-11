<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserControllerAPI;
use App\Http\Controllers\API\CourierControllerAPI;
use App\Http\Controllers\API\ItemControllerAPI;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', UserControllerAPI::class);

Route::apiResource('couriers', CourierControllerAPI::class);

Route::apiResource('items', ItemControllerAPI::class);

// ini salah nandain array
// Route::apiResource('items/sewa', [ItemControllerAPI::class, 'sewaBarang']);

// Testing API

// Route::apiResource('items', 'ItemControllerAPI@index');

// Route::post('/items', 'ItemControllerAPI@sewaBarang');
