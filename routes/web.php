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
Route::get('/d', function () {
    return view('dti');
});
Route::get('/p', function () {
    return view('predial');
});
Route::get('/o', function () {
    return view('observ');
});
Route::get('/i', function () {
    return view('info');
});
Route::get('/l', function () {
    return view('login');
});