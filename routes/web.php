<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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
    return view('home/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('/dashboard', 'HomeController@dashboardView')->name('dashboard');
});
