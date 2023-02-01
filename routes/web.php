<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DortmundController;
use App\Http\Controllers\HomeController;

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



Route::domain('immobilienbewertung-duisburg.com')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('datenschutzerklaerung', 'HomeController@privacyPolicy')->name('privacy-policy');
    Route::get('wohnimmobilien', 'HomeController@residentialProperties')->name('residential-properties');
    Route::get('verkehrswertverfahren', 'HomeController@marketValueProcedure')->name('market-value-procedure');
    Route::get('sonderimmobilien', 'HomeController@specialProperties')->name('special-properties');
});

Route::domain('immobilienbewertung-bochum.com')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('datenschutzerklaerung', 'HomeController@privacyPolicy')->name('privacy-policy');
    Route::get('wohnimmobilien', 'HomeController@residentialProperties')->name('residential-properties');
    Route::get('verkehrswertverfahren', 'HomeController@marketValueProcedure')->name('market-value-procedure');
    Route::get('sonderimmobilien', 'HomeController@specialProperties')->name('special-properties');
});