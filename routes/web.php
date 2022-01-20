<?php

use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\RoomController as AdminRoomController;
use App\Http\Controllers\admin\RoomTypeController;
use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\BlogController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\RoomController;
use App\Http\Controllers\web\AboutController;
use App\Http\Controllers\web\BookingController;

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

Route::get('/redirect', [RedirectController::class, 'index'])->name('redirect');

// website routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [AboutController::class, 'index'])->name('about');

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
Route::get('/rooms/{id}', [RoomController::class, 'show']);

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{id}', [BlogController::class, 'show']);

Route::view('/contact-us', 'web.contact.index')->name('contact-us');

Route::resource('booking', BookingController::class)->middleware('auth');

// admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');


    Route::resource('rooms', AdminRoomController::class);

    Route::resource('room-types', RoomTypeController::class);
    Route::get('room-types/search', [RoomTypeController::class, 'search'])->name('room_types.search');

    Route::resource('blogs', BlogController::class);
    Route::resource('bookings', BookingController::class);
});