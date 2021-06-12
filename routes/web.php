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
    return view('home0236');
});
Route::get('/buku','App\Http\Controllers\BukuController@buku')->name('buku');
Route::get('/buku/export','App\Http\Controllers\BukuController@export')->name('export');