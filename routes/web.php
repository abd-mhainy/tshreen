<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\VictimsController;
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

Route::get('category/{id}/{name}', function () {
    return view('welcome');
});

Route::get('post/{id}/{name}', function () {
    return view('welcome');
});

Route::get('{lang}/home-page', [HomePageController::class, 'getHomePage'])->name('home-page');
Route::get('{lang}/footer', [HomePageController::class, 'getFooterData'])->name('footer-data');

Route::prefix('category')->group(function () {
    Route::get('{id}/get-category', [CategoryController::class, 'getById'])->name('get-category');
    Route::get('get-all-categories', [CategoryController::class, 'getAll'])->name('get-all');
});

Route::prefix('news')->group(function () {
    Route::get('{id}/{lang}/get-news', [NewsController::class, 'getById'])->name('get-news');
    Route::get('{catId}/{lang}/get-all-news-by-category', [NewsController::class, 'getAllByCategory'])
        ->name('get-all-news-by-category');
});

Route::prefix('victims')->group(function () {
    Route::get('{id}/{lang}/get-victim', [VictimsController::class, 'getById'])->name('get-victim');
    Route::get('{lang}/get-all-victims', [VictimsController::class, 'getAllPaginated'])
        ->name('get-all-victims');
    Route::get('{lang}/get-all-martyrs', [VictimsController::class, 'getPaginatedMartyrs'])
        ->name('get-all-martyrs');
    Route::get('{lang}/get-all-injured', [VictimsController::class, 'getPaginatedInjured'])
        ->name('get-all-injured');
});
