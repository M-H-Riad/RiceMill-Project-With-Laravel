<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('riceCost','riceCostController');

Route::get('riceCost','riceCostController@index');

Route::resource('transportCost','transportCostController');

Route::resource('workerCost','workerCostController');

Route::resource('foodCost','foodCostController');

Route::resource('equipmentCost','equipmentCostController');

Route::resource('otherCost','otherCostController');

Route::resource('otherProfit','otherProfitController');


Route::resource('riceProfit','riceProfitController');

Route::resource('productAd','productAdController');

