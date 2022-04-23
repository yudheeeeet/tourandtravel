<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RentcarController;
use App\Http\Controllers\TravelPromoController;
use App\Http\Controllers\TravelRegulerController;
use App\Http\Controllers\TransactionRentcarController;
use App\Http\Controllers\TransactionTravelController;
use App\Http\Controllers\TransactionAdminController;


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
    return view('index');
});

Route::get('/', [IndexController::class, 'index']);
Route::view('tentang', 'tentang');

Route::get('/rentcar-dashboard', [IndexController::class, 'rentcar']);
Route::get('/travel-reguler', [IndexController::class, 'reguler']);
Route::get('/travel-promo', [IndexController::class, 'promo']);

Route::group(['middleware' => 'auth'], function () {
    // ** User **
    Route::get('/user', [UserController::class, 'user'])->name('user');
    Route::get('/user-edit', [UserController::class, 'edit']);
    Route::post('/update_user/{id}', [UserController::class, 'update_user']);
    Route::get('/user/travel-reguler', [UserController::class, 'reguler'])->name('travel-reguler');
    Route::get('/user/travel-promo', [UserController::class, 'promo'])->name('travel-promo');
    Route::resource('/user/rentcar/index', TransactionRentcarController::class);
    Route::resource('/user/travel/name', TransactionTravelController::class);
    Route::get('/user/transaction/travel', [UserController::class, 'travel']);
    Route::get('/user/transaction/edit_travel/{id}', [UserController::class, 'edit_travel']);
    Route::post('/user/transaction/update_travel/{id}', [UserController::class, 'update_travel']);
    Route::get('/user/transaction/rentcar', [UserController::class, 'rentcar']);
    Route::get('/user/transaction/edit_rentcar/{id}', [UserController::class, 'edit_rentcar']);
    Route::post('/user/transaction/update_rentcar/{id}', [UserController::class, 'update_rentcar']);
    // ** Admin **
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/admin-edit', [AdminController::class, 'edit']);
    Route::post('/update/{id}', [AdminController::class, 'update']);
    Route::resource('/rentcar/data', RentcarController::class);
    Route::resource('/promo/data', TravelPromoController::class);
    Route::resource('/reguler/data', TravelRegulerController::class);
    Route::resource('/admin/transaction/user', TransactionAdminController::class);
    Route::get('/admin/index', [AdminController::class, 'show']);
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit_transaction']);
    Route::post('/admin/update/{id}', [AdminController::class, 'update_transaction']);
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
