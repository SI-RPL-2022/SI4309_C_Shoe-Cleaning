<?php

use App\Http\Controllers\Authentication;
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
Route::get('/', [Authentication::class, 'index']);

// Register
Route::get('/Register', [Authentication::class, 'registerPage'])->middleware('guest');
Route::post('/Register', [Authentication::class, 'store']);