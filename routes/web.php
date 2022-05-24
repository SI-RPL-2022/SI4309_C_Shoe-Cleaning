<?php

use Illuminate\Support\Facades\Route;

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

// Main
Route::get('/', [Controller::class, 'index']);

// Register
Route::get('/Register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/Register', [RegisterController::class, 'store']);