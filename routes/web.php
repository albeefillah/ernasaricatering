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
