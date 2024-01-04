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

Route::get('/', function () {
    return view('home');
});

//Route::get('/register', function () {
//   return view('register');
//});
//Route::post('login', [AuthController::class, 'login_member']);
//Route::post('logout', [AuthController::class, 'logout_member']);

//Auth
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

//kategori
Route::get('/kategori', [CategoryController::class, 'list']);

Route::get('/dashboard', [DashboardController::class, 'index']);
