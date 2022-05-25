<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\Customer;
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
Route::get('/Home', [Authentication::class, 'index']);

// Register
Route::get('/Register', [Authentication::class, 'registerPage'])->middleware('guest');
Route::post('/Register', [Authentication::class, 'store']);

// User
Route::get('/Login', [Authentication::class, 'loginPage'])->middleware('guest');
Route::post('/Login', [Authentication::class, 'authenticate'])->name('login-user');
Route::post('/Logout', [Authentication::class, 'logout']);

// Admin
Route::get('/HomeAdmin', [Admin::class, 'indexAdmin'])->middleware('is_admin');

// Service User
Route::get('/Service', [Customer::class, 'service']);
Route::get('/Order', [Customer::class, 'order'])->middleware('auth');
Route::post('/Order', [Customer::class, 'store'])->middleware('auth')->name('checkouts');