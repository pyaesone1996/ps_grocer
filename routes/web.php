<?php

use Illuminate\Support\Facades\Route;

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
    return view('home2');
});
Route::get('/test33', function () {
    return view('test33');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/shoppingcart', function () {
    return view('shoppingcart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [App\Http\Controllers\TestController::class, 'products'])->name('test');
// Route::get('/test/{id}', [App\Http\Controllers\TestController::class, 'testing']);
Route::get('/testing', [App\Http\Controllers\TestController::class, 'testing']);


