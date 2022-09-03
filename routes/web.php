<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandaraController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
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
Route::get('/admin', [DashboardController::class, 'index']);
Route::get('/bandara', [BandaraController::class, 'index']);
Route::get('/rumahsakit', [RumahSakitController::class, 'index']);
Route::get('/hotel', [BandaraController::class, 'index']);
Route::get('/pelabuhan', [BandaraController::class, 'index']);
Route::get('/bank', [BandaraController::class, 'index']);
Route::get('/terminal', [BandaraController::class, 'index']);
Route::get('/stasiun', [BandaraController::class, 'index']);