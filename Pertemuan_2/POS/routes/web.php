<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/category', function () {
    return view('product');
});
Route::prefix('category')->group(function () {
    Route::get('/food-beverages', [CategoryController::class, 'fnb']);
    Route::get('/beauty-care', [CategoryController::class, 'beauty_care']);
    Route::get('/home-care', [CategoryController::class, 'home_care']);
    Route::get('/baby-kid', [CategoryController::class, 'baby_kid']);
});

Route::get('user/{id}/name/{name}', [UserController::class, 'user']);

Route::get('/sale', [SalesController::class, 'sales']);


