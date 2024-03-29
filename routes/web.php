<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BandaraController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvestasiController;
use App\Http\Controllers\RumahSakitController;

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

Route::get('/', [BerandaController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/admin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store']);
// Route::get('/bandara', [BandaraController::class, 'index']);
Route::resource('/dashboard/bandara', BandaraController::class)->middleware('auth');
Route::resource('/dashboard/hotel', HotelController::class)->middleware('auth');
Route::resource('/dashboard/investasi', InvestasiController::class)->middleware('auth');
Route::get('/caripertanian/getsubsektor/{id}', [InvestorController::class, 'getsubsektor']);