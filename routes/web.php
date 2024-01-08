<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
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

// VIEWS
Route::get('/', [HomeController::class, 'index']);

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/product-list', function () {
    return view('product-list');
});
Route::get('/description', function () {
    return view('description');
});
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});



// VIEWS ADMIN
Route::get('/login-admin', function () {
    return view('auth.login-admin');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/kategori', function () {
    return view('kategori.index');
});
Route::get('/produk', function () {
    return view('produk.index');
});

Route::get('logout', [AuthController::class, 'logout']);
Route::get('logout-admin', [AuthController::class, 'logout_admin']);
