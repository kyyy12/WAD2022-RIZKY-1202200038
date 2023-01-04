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
    return view('rizky_home');
});
Route::get('/rizky_myitem', function () {
    return view('rizky_myitem');
});
Route::get('/rizky_login', function () {
    return view('rizky_login');
});
Route::get('/rizky_additem', function () {
    return view('rizky_additem');
});