<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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
    return view('Home');
});

Route::get('/Home', [OrderController::class, 'Home']);

Route::get('/order', [OrderController::class, 'order']);

Route::get('/pesanan', [OrderController::class, 'Pesanan']);

Route::get('/closing', [OrderController::class, 'Closing']);