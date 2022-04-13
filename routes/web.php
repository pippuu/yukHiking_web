<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\Testing;
use Illuminate\Support\Facades\Auth;

use Database\Factories\CourierFactory;




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

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/home', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/users', [UserController::class, 'show'])->middleware('auth');
Route::post('/users/create', [UserController::class, 'create'])->middleware('auth');
Route::get('/users/destroy/{user}', [UserController::class, 'destroy'])->middleware('auth')->name('destroy');
Route::get('/users/destroyAll', [UserController::class, 'destroyAll'])->middleware('auth');
Route::post('/users/update/{user}', [UserController::class, 'update'])->middleware('auth')->name('update');

Route::get('/couriers', [CourierController::class, 'show'])->middleware('auth');
Route::post('/couriers/create', [CourierController::class, 'create'])->middleware('auth');
// Route::post('/couriers/createDummy', [CourierFactory::class, 'definition'])->middleware('auth');
Route::get('/couriers/destroy/{courier}', [CourierController::class, 'destroy'])->middleware('auth')->name('destroy');
Route::get('/couriers/destroyAll', [CourierController::class, 'destroyAll'])->middleware('auth');
Route::post('/couriers/update/{courier}', [CourierController::class, 'update'])->middleware('auth')->name('update');

Route::get('/agents', [AgentController::class, 'show'])->middleware('auth');
Route::post('/agents/create', [AgentController::class, 'create'])->middleware('auth');
Route::get('/agents/accept/{agent}', [AgentController::class, 'accept'])->middleware('auth');
Route::get('/agents/destroy/{agent}', [AgentController::class, 'destroy'])->middleware('auth')->name('destroy');
Route::get('/agents/destroyAll', [AgentController::class, 'destroyAll'])->middleware('auth');
Route::post('/agents/update/{agent}', [AgentController::class, 'update'])->middleware('auth')->name('update');

Route::get('/testing', [Testing::class, 'showTable']);

// Route::get('/items', function () {
//     return view('items');
// });

// Route::resource('items', ItemsController::class);
// Route::post('/items/create', [ItemsController::class, 'create'])->middleware('auth');


Route::get('/items', [ItemController::class, 'show'])->middleware('auth');
Route::post('/items/create', [ItemController::class, 'create'])->middleware('auth');
Route::get('/items/destroy/{item}', [ItemController::class, 'destroy'])->middleware('auth')->name('destroy');
Route::get('/items/destroyAll', [ItemController::class, 'destroyAll'])->middleware('auth');
Route::post('/items/update/{item}', [ItemController::class, 'update'])->middleware('auth')->name('update');
