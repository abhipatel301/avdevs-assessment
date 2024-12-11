<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::group(['prefix' => 'login','as'=>'login.'], function () {
    Route::get('/','LoginController@login')->name('index');
    Route::post('/loginCheck','LoginController@check')->name('check');
});

Route::group(['prefix' => 'register','as'=>'register.'], function () {
    Route::get('/','LoginController@register')->name('index');
    Route::post('/create','LoginController@create')->name('create');
});

Route::middleware('customerAuth')->group(function () {
    Route::get('cusromer/dashboard','DashboardController@index')->name('dashboard');

    Route::get('/logout','LoginController@logout')->name('logout');
});
