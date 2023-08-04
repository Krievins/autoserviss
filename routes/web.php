<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CreatecarController;
use App\Http\Controllers\CreateuserController;
use App\Http\Controllers\CreatecategoryController;
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

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store']);
Route::get('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Admin
Route::get('admin', [SessionsController::class, 'admin'])->middleware('admin');

// For Users Sections
Route::get('/admin/create_user', [CreateuserController::class, 'index'])->middleware('auth');
Route::post('/admin/create_user', [CreateuserController::class, 'insert_user'])->middleware('auth');
Route::get('/admin/users', [CreateuserController::class, 'all_users'])->middleware('auth');
Route::post('/admin/users', [CreateuserController::class, 'send_msg'])->middleware('auth');

Route::get('/admin/user/{id}/view', [CreateuserController::class, 'view'])->middleware('auth')->name('admin.user_view');
Route::get('/admin/user/{id}/edit', [CreateuserController::class, 'edit'])->middleware('auth')->name('admin.user_edit');

// For Car Sections
Route::get('/admin/create_car', [CreatecarController::class, 'index'])->middleware('admin');
Route::post('/admin/create_car', [CreatecarController::class, 'create_car'])->middleware('admin');
Route::get('/admin/cars', [CreatecarController::class, 'show_cars'])->middleware('admin');
Route::get('/admin/get-car-data', [CreatecarController::class, 'get_api_data'])->middleware('admin');

Route::get('/admin/{id}/view', [CreatecarController::class, 'view'])->middleware('auth')->name('admin.car_view');
Route::get('/admin/{id}/edit', [CreatecarController::class, 'edit'])->middleware('auth')->name('admin.car_edit');


// For Profesie Section
Route::get('/admin/create_category', [CreatecategoryController::class, 'categoryIndex'])->middleware('admin');
Route::post('/admin/create_category', [CreatecategoryController::class, 'categoryCreate'])->middleware('admin');
Route::get('/admin/category', [CreatecategoryController::class, 'showCategories'])->middleware('admin');

// Worker
Route::get('worker', [SessionsController::class, 'worker'])->middleware('auth');