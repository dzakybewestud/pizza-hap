<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index']);
// Ketika mengakses '/' pada url, maka akan memanggil funcction index pada class HomeController
Route::get('/home', [HomeController::class, 'redirect']); // ketika mengakses '/home' pada url, maka akan memanggil function 'redirect' pada class HomeController

Route::get('/menus', [HomeController::class, 'view_menus']);
// ADMIN MENU START
Route::get('/admin-menu', [AdminController::class, 'view_adminMenu'])->middleware('admin');
Route::post('/add_menu', [AdminController::class, 'add_menu'])->middleware('admin'); //menggunakan POST karena form yang digunakan memiliki metode post.
Route::get('/delete_menu/{id_menu}', [AdminController::class, 'delete_menu'])->middleware('admin');
Route::get('/edit_menu/{id_menu}', [AdminController::class, 'edit_menu'])->middleware('admin');
Route::post('/edit_menu_confirm/{id_menu}', [AdminController::class, 'edit_menu_confirm'])->middleware('admin');
// ADMIN MENU END

// ADMIN USER START
Route::get('/admin-user', [AdminController::class, 'view_adminUser'])->middleware('admin');
Route::get('/edit_user/{id}', [AdminController::class, 'edit_user'])->middleware('admin');
Route::post('/edit_user_confirm/{id}', [AdminController::class, 'edit_user_confirm'])->middleware('admin');
Route::get('/delete_user/{id}', [AdminController::class, 'delete_user'])->middleware('admin');
// ADMIN USER END

// ADMIN USER START
Route::get('/admin-driver', [AdminController::class, 'view_adminDriver'])->middleware('admin');
Route::post('/add_driver', [AdminController::class, 'add_driver'])->middleware('admin'); //menggunakan POST karena form yang digunakan memiliki metode post.
Route::get('/edit_driver/{id}', [AdminController::class, 'edit_driver'])->middleware('admin');
Route::get('/delete_driver/{id}', [AdminController::class, 'delete_driver'])->middleware('admin');
// ADMIN USER END


// Admin Order Start
Route::get('/admin-order', [AdminController::class, 'view_adminOrder'])->middleware('admin');

Route::post('/add_cart/{id}', [HomeController::class, 'add_cart'])->middleware('auth');
Route::get('/show_cart', [HomeController::class, 'show_cart'])->middleware('auth');
Route::get('/delete_cart/{id}', [HomeController::class, 'delete_cart'])->middleware('auth');
Route::get('/checkout_cart', [HomeController::class, 'checkout_cart'])->middleware('auth');
Route::get('/show_orders', [HomeController::class, 'show_orders'])->middleware('auth');


Route::get('/diantar/{nama_user}/{delivery_status}', [HomeController::class, 'driver_home'])->middleware('driver');
Route::get('/selesai/{nama_user}/{delivery_status}', [HomeController::class, 'driver_home'])->middleware('driver');
Route::get('/status/{nama_user}', [DriverController::class, 'status'])->middleware('driver');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
