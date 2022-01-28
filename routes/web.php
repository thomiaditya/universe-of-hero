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

if (env('USER_CONSTRUCTION')) {
    Route::get('/', function () {
        return view('under-construction');
    });
}

Route::group(['prefix' => '/'], function () {
    //
});
