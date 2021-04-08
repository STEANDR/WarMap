<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllMapsController;
use App\Http\Controllers\NetworkGame;

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

Route::get('/maps', [AllMapsController::class, 'index'])->name('allMaps');
Route::get('/networkGame', [NetworkGame::class, 'index'])->name('networkGame');
Route::get('/maps/category/{slug}',[AllMapsController::class, 'getMapsByCategory'])->name('getMapsByCategory');
