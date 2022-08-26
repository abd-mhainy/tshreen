<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\NewsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('{lang}/home-page', [HomePageController::class, 'getHomePage'])->name('home-page');

Route::prefix('category')->group(function () {
    Route::get('{id}/get-category', [CategoryController::class, 'getById'])->name('get-category');
    Route::get('get-all-categories', [CategoryController::class, 'getAll'])->name('get-all');
});

Route::prefix('news')->group(function () {
    Route::get('{id}/get-news', [NewsController::class, 'getById'])->name('get-category');
    Route::get('{catId}/{lang}/get-all-by-category', [NewsController::class, 'getAllByCategory'])
        ->name('get-all-by-category');
});
