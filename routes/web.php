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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/request', [App\Http\Controllers\RequestController::class, 'index'])->name('request');
    Route::post('/request', [App\Http\Controllers\RequestController::class, 'store'])->name('request-store');
    Route::get('/request/{id}', [App\Http\Controllers\RequestController::class, 'show'])->name('request-show');

});

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', ['App\Http\Controllers\Admin\DashboardController', 'index'])->name('admin-dashboard');
        Route::resource('user', '\App\Http\Controllers\Admin\UserController');
        Route::resource('request', '\App\Http\Controllers\Admin\RequestsController');
    });

Route::prefix('vp')
    ->namespace('VP')
    ->middleware(['auth','vp'])
    ->group(function(){
        Route::get('/', ['App\Http\Controllers\vp\DashboardController', 'index'])->name('vp-dashboard');
        Route::resource('request-vp', '\App\Http\Controllers\vp\RequestsController');
    });

