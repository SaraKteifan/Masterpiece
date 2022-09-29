<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [Controller::class, 'index']);
Route::get('/shop', [Controller::class, 'shop']);
Route::get('/product/{id}', [Controller::class, 'product']);
Route::get('/about', [Controller::class, 'about']);
Route::get('/contact', [Controller::class, 'contact']);
Route::get('/uploadPiece1', [Controller::class, 'uploadP1']);
Route::get('/uploadPiece2', [Controller::class, 'uploadP2']);
Route::get('/cart', [Controller::class, 'cart']);
Route::get('/checkout', [Controller::class, 'checkout']);

Route::post('/sellStep1', [ProductsController::class, 'sellStep1']);
Route::get('/sellStep2', [ProductsController::class, 'sellStep2']);

Route::get('/addToCart/{id}',[Controller::class, 'cart']);
Route::get('/cart',[Controller::class, 'cart']);
Route::post('/checkout',[Controller::class, 'checkout']);











Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
