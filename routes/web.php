<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * Melakukan redirect ke halaman home ketika ada yang mengakses root path
 */
Route::redirect('/', '/home');

/**
 * Routing url /home ke HomeController
 */
Route::get('/home', [HomeController::class, 'index']);

Route::prefix('category')->group(function (){
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/food-beverage', [ProductController::class, 'food_beverage']);
    Route::get('/beauty-health', [ProductController::class, 'beauty_health']);
    Route::get('/home-care', [ProductController::class, 'home_care']);
    Route::get('/baby-kid', [ProductController::class, 'baby_kid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'detail']);

Route::get('/sales', [SalesController::class, 'index']);
