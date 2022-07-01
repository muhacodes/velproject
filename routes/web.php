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

Auth::routes();
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function(){
    return redirect()->route('home');
});


Route::middleware('auth')->group(function () {


    Route::get('/home', 'ApproveController@index')->name('home');

    Route::get('/approve/{id}/', 'ApproveController@approve')->name('approve');
    
    Route::get('/reject/{id}/', 'ApproveController@reject')->name('reject');

    Route::get('/user/logout/', 'ApproveController@logout')->name('reject');

    Route::get('/jobcard/all', 'ApproveController@all')->name('jobcard-all');

});



// Route::get('/home', 'HomeController@index')->name('home');
