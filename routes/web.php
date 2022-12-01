<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\SessionsController;
use App\Http\Middleware\AdminsOnly;
use GuzzleHttp\Middleware;

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
    return view('welcome');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
// Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store']);
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Admin
Route::get('admin', [SessionsController::class, 'admin'])->middleware('admin');
// For Users Sections
Route::get('admin/create_user', [AdminController::class, 'create'])->middleware('admin');
Route::post('admin/create_user', [AdminController::class, 'store'])->middleware('admin');
Route::get('admin/users', [AdminController::class, 'showUsers'])->middleware('admin');
// For Car Sections
Route::get('/admin/create_car', [AdminController::class, 'car_index'])->middleware('admin');
Route::post('/admin/create_car', [AdminController::class, 'input_car'])->middleware('admin');
Route::get('admin/cars', [AdminController::class, 'showAllCars'])->middleware('admin');
// For Profesie Section
Route::get('admin/create_category', [AdminController::class, 'categoryIndex'])->middleware('admin');
Route::post('admin/create_category', [AdminController::class, 'categoryCreate'])->middleware('admin');
Route::get('admin/category', [AdminController::class, 'showCategories'])->middleware('admin');

// Worker
Route::get('worker', [SessionsController::class, 'worker'])->middleware('auth');
