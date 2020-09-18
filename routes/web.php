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

Route::get('/clear-config', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
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

Route::middleware('adminAuth')->group(function () {
    Route::get('/admin/customer', [App\Http\Controllers\AdminController::class, 'customer'])->name('customer');
    Route::get('customer_data', [App\Http\Controllers\AdminController::class, 'customer_data'])->name('customer_data');

    Route::get('/admin/agent', [App\Http\Controllers\AdminController::class, 'agent'])->name('agent');
    Route::get('agent_data', [App\Http\Controllers\AdminController::class, 'agent_data'])->name('agent_data');
    Route::get('/admin/agent/sales/{agent_id}', [App\Http\Controllers\AdminController::class, 'agent_sales'])->name('agent_sales');

    Route::get('/admin/deposite', [App\Http\Controllers\AdminController::class, 'deposite'])->name('deposite');
    Route::get('/admin/withdraw', [App\Http\Controllers\AdminController::class, 'withdraw'])->name('withdraw');

    Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
    Route::get('product_data', [App\Http\Controllers\ProductController::class, 'product_data'])->name('product_data');
    Route::get('/admin/product/add', [App\Http\Controllers\ProductController::class, 'add'])->name('add_product');
    Route::post('/admin/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store_product');
    Route::get('/admin/product/edit/{product_id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit_product');
    Route::post('/admin/product/update/{product_id}', [App\Http\Controllers\ProductController::class, 'update'])->name('update_product');
    Route::get('/admin/product/delete/{product_id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('delete_product');
});

// Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin')->middleware('superadmin');
// Route::get('/scout', 'ScoutController@index')->name('scout')->middleware('scout');
// Route::get('/team', 'TeamController@index')->name('team')->middleware('team');
// Route::get('/academy', 'AcademicController@index')->name('academy')->middleware('academy');

// Route::get('/home', 'AcademicController@index')->name('home');
