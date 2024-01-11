<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/product/{id}', [ProductController::class, 'detail']);

// Route::get('/product/{id}', function () {
//     return view('product-detail');
// });
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});
Route::get('/payment', function () {
    return view('payment');
});

Route::get('/order', function () {
    return view('order');
});



// VIEWS ADMIN
Route::get('/login-admin', function () {
    return view('admin.login');
});
Route::get('/dashboard-admin', function () {
    return view('admin.dashboard');
});
Route::get('/category-admin', function () {
    return view('admin.category');
});
Route::get('/product-admin', function () {
    return view('admin.product');
});
Route::get('/payment-admin', function () {
    return view('payment.index');
});
Route::get('/banner-admin', function () {
    return view('admin.banner');
});

Route::get('logout', [AuthController::class, 'logout']);
Route::get('logout-admin', [AuthController::class, 'logout_admin']);
