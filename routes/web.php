<?php

use App\Http\Controllers\CalculateController;
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

Route::get('/', function () {return view('home');})->name('home');

Route::get('/calculate_page','CalculateController@calculate')->name('calculate');
Route::get('/list_page','CalculateController@list')->name('list');

Route::post('/calculate/store_calculate','CalculateController@store')->name('store');

Route::get('/detail/{id}','CalculateController@show')->name('show');
Route::delete('/list-page/{id}','CalculateController@destroy')->name('destroy');
Route::get('/list-edit/{id}','CalculateController@edit')->name('edit');
Route::put('/list-update/{id}','CalculateController@update')->name('update');   
