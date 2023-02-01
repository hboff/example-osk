<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DortmundController;
use App\Http\Controllers\OskarController;

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



Route::group(['domain' => '{domain}'], function() {
    Route::get('/', 'OskarController@index');
    Route::view('/datenschutzerklaerung', 'datenschutzerklaerung');
    Route::view('/welcome', 'welcome');
    Route::view('/index', 'index');
});
