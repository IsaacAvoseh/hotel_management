<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\HotelController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::match(['get', 'post'], '/admin/dashboard', [DashBoardController::class, 'Admin'])->name('dashboard');
Route::match(['get', 'post'], '/admin/login', [DashBoardController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/admin/register', [DashBoardController::class, 'register'])->name('register');
Route::match(['get', 'post'], '/admin/logout', [DashBoardController::class, 'logout'])->name('logout');
Route::match(['get', 'post'], '/admin/change-password', [DashBoardController::class, 'changePassword'])->name('changePassword');
Route::match(['get', 'post'], '/admin/staff', [DashBoardController::class, 'staff'])->name('staff');
Route::post('/admin/staff/role', [DashBoardController::class, 'addRole'])->name('role');
Route::match(['get', 'post'], '/admin/room', [DashBoardController::class, 'room'])->name('room');
Route::post('/admin/staff/roomfeatures', [DashBoardController::class, 'addRoomFeatures'])->name('roomfeatures');
Route::match(['get', 'post'], '/admin/roomsingle', [DashBoardController::class, 'roomsingle'])->name('roomsingle');
Route::match(['get', 'post'], '/admin/roomfeatures', [DashBoardController::class, 'services'])->name('services');
Route::match(['get', 'post'], '/admin/messages', [DashBoardController::class, 'messages'])->name('messages');
Route::match(['get', 'post'], '/admin/bookings', [DashBoardController::class, 'bookings'])->name('bookings');

Route::match(['get', 'post'], '/', [HotelController::class, 'Home']);
Route::match(['get', 'post'], '/room', [HotelController::class, 'Room']);
Route::match(['get', 'post'], '/contact', [HotelController::class, 'Contact']);
Route::match(['get', 'post'], '/booking', [HotelController::class, 'Booking']);
Route::match(['get', 'post'], '/royal', [HotelController::class, 'Royal']);
Route::match(['get', 'post'], '/business', [HotelController::class, 'Business']);
Route::match(['get', 'post'], '/purple', [HotelController::class, 'Purple']);
Route::match(['get', 'post'], '/regular', [HotelController::class, 'Regular']);
Route::match(['get', 'post'], '/green', [HotelController::class, 'Green']);
Route::match(['get', 'post'], '/orange', [HotelController::class, 'Orange']);
Route::match(['get', 'post'], '/classic', [HotelController::class, 'Classic']);