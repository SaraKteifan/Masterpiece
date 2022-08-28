<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [Controller::class, 'index']);
Route::get('/shop', [Controller::class, 'shop']);
Route::get('/product', [Controller::class, 'product']);
Route::get('/about', [Controller::class, 'about']);
Route::get('/contact', [Controller::class, 'contact']);
Route::get('/uploadPiece1', [Controller::class, 'uploadP1']);
Route::get('/uploadPiece2', [Controller::class, 'uploadP2']);







