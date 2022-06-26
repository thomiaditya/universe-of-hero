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

Route::group(['prefix' => '/', 'as' => 'web.'], function () {
    Route::get('/', [\App\Http\Controllers\WebController::class, 'home'])->name('home');
    Route::get('/comic', [\App\Http\Controllers\WebController::class, 'comic'])->name('comic');
    Route::get('/about', [\App\Http\Controllers\WebController::class, 'about'])->name('about');
    Route::get('/donate', [\App\Http\Controllers\WebController::class, 'donate'])->name('donate');
});
