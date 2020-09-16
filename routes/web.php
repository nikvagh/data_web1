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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/player', 'PlayerController@index')->name('player')->middleware('player');
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
// Route::get('/admin', 'AdminController@index');

Route::get('/player', [App\Http\Controllers\PlayerController::class, 'index'])->name('player')->middleware('player');

Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client')->middleware('client');
Route::get('/agent', [App\Http\Controllers\AgentController::class, 'index'])->name('agent')->middleware('agent');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');

// Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin')->middleware('superadmin');
// Route::get('/scout', 'ScoutController@index')->name('scout')->middleware('scout');
// Route::get('/team', 'TeamController@index')->name('team')->middleware('team');
// Route::get('/academy', 'AcademicController@index')->name('academy')->middleware('academy');

// Route::get('/home', 'AcademicController@index')->name('home');
