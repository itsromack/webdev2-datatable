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

Route::get('/datatable', 'App\Http\Controllers\TableController@index');

Route::get('/view-announcement/{id}', 'App\Http\Controllers\TableController@view');

Route::get('/edit-announcement/{id}', 'App\Http\Controllers\TableController@edit');

Route::post('/update-announcement', 'App\Http\Controllers\TableController@update');

Route::get('/bible', 'App\Http\Controllers\BibleController@index');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

Route::get('/', function () {
    return view('welcome');
});