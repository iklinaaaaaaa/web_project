<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'user']);
Route::get('/auth', [UserController::class, 'auth']);
// Route::get('/user/shop',[UserController::class, 'add']);
Route::get('/user/shop/{id}', [UserController::class, 'show'])->name('user.shop');
// Route::get('/check/out/{id}', [UserController::class, 'check-out'])->name('check.out');
Route::get('/keranjang', [UserController::class, 'keranjang']);
Route::get('/ceck-out', [UserController::class, 'ceckout']);
Route::get('/dasboard', [UserController::class, 'dasboard']);
Route::get('/checkout', [UserController::class, 'checkout']);
Route::get('/product', [UserController::class, 'product']);




Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');

