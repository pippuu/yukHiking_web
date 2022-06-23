<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserControllerAPI;
use App\Http\Controllers\API\CourierControllerAPI;
use App\Http\Controllers\API\ItemControllerAPI;
use App\Http\Controllers\API\AgentControllerAPI;
use App\Http\Controllers\API\TransaksiControllerAPI;


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

// Route::apiResource('users', UserControllerAPI::class);

// Route::resource('users', 'API/UserControllerAPI');

// Route::get('users/index', 'API/UserControllerAPI@index');

// Route::get('users/index', [UserController::class, 'show']);


Route::get('/users', [UserControllerAPI::class, 'index']);

Route::post('/users/update', [UserControllerAPI::class, 'update']);

Route::get('/agents', [AgentControllerAPI::class, 'index']);

Route::get('/items', [ItemControllerAPI::class, 'index']);

Route::get('/couriers', [CourierControllerAPI::class, 'index']);

Route::post('/transaksis/create', [TransaksiControllerAPI::class, 'create']);

Route::apiResource('couriers', CourierControllerAPI::class);

Route::apiResource('items', ItemControllerAPI::class);

// ini salah nandain array
// Route::apiResource('items/sewa', [ItemControllerAPI::class, 'sewaBarang']);

// Testing API

// Route::apiResource('items', 'ItemControllerAPI@index');

// Route::post('/items', 'ItemControllerAPI@sewaBarang');
