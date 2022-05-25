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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', 'OrdersController@index')->name('index');

Route::get('/approve/{id}/', 'OrdersController@approve')->name('approve');

Route::get('/reject/{id}/', 'OrdersController@reject')->name('reject');