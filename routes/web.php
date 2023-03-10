<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DortmundController;
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
Route::group(['domain' => 'immobilienbewertung-duisburg.com'], function () {
    Route::get('/', [DortmundController::class, 'index']);
Route::get('datenschutzerklaerung', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('wohnimmobilien', [HomeController::class, 'residentialProperties'])->name('residential-properties');
Route::get('verkehrswertverfahren', [HomeController::class, 'marketValueProcedure'])->name('market-value-procedure');
Route::get('sonderimmobilien', [HomeController::class, 'specialProperties'])->name('special-properties');
});


Route::group(['domain' => 'immobilienbewertung-bochum.com'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});