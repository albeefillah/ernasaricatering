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

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index']);
Route::get('/halaman_menu', [App\Http\Controllers\FrontEndController::class, 'gethalamanmenu']);
Route::get('/backend-page', [App\Http\Controllers\BackendController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Akun
// Route::prefix('user')->middleware('admin', 'auth')->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/', [App\Http\Controllers\Backend\UserController::class, 'index'])->name('user.index');
        Route::get('/create', [App\Http\Controllers\Backend\UserController::class, 'create'])->name('user.create');
        Route::post('/store', [App\Http\Controllers\Backend\UserController::class, 'store'])->name('user.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Backend\UserController::class, 'edit'])->name('user.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Backend\UserController::class, 'update'])->name('user.update');
        Route::get('/destroy/{id}', [App\Http\Controllers\Backend\UserController::class, 'destroy'])->name('user.destroy');
    });
    
