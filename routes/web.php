<?php

use App\Http\Controllers\AuthController;
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

// VIEWS MEMBER
Route::get('/', function () {
    return view('home');
});
Route::get('/login_member', function () {
    return view('login_member');
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
Route::get('/product-list', function () {
    return view('product-list');
});
Route::get('/description', function () {
    return view('description');
});

// VIEWS ADMIN
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/kategori', function () {
    return view('kategori.index');
});


// ENDPOINT LIST
//Auth
Route::post('login-member', [AuthController::class, 'login_member']);
Route::post('logout-member', [AuthController::class, 'logout_member']);
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

//kategori
Route::get('/kategori', [CategoryController::class, 'list']);

Route::get('/dashboard', [DashboardController::class, 'index']);
