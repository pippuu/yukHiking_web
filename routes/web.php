<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Testing;
use Illuminate\Support\Facades\Auth;




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


Route::get('/agents', function () {
    return view('agents');
});

Route::get('/couriers', function () {
    return view('couriers');
});

Route::get('/testing', [Testing::class, 'showTable']);
