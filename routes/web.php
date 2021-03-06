<?php

use App\Http\Controllers\BookingsController;
use App\Http\Controllers\ContactMessagesController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\ForgotPassWordController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoomController;
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
Route::match(['get', 'post'], '/admin/room', [RoomController::class, 'room'])->name('room');
Route::post('/admin/staff/roomfeatures', [FeaturesController::class, 'addRoomFeatures'])->name('roomfeatures');
Route::match(['get', 'post'], '/admin/roomsingle', [DashBoardController::class, 'roomsingle'])->name('roomsingle');
Route::match(['get', 'post'], '/admin/roomfeatures', [FeaturesController::class, 'features'])->name('features');
Route::match(['get', 'post'], '/admin/messages', [ContactMessagesController::class, 'messages'])->name('messages');
Route::match(['get', 'post'], '/admin/booking-details/{id}', [DashBoardController::class, 'bookingDetails'])->name('booking-details');
Route::post('/admin/booking-details/update/{id}', [DashBoardController::class, 'updateBooking'])->name('update-booking');
Route::match(['get', 'post'],'/admin/booking-report', [DashBoardController::class, 'bookingReport'])->name('booking-report');
Route::match(['get', 'post'], '/admin/messages/{id}', [ContactMessagesController::class, 'replyMessage'])->name('reply');
Route::match(['get', 'post'], '/admin/messages/delete/{id}', [ContactMessagesController::class, 'deleteMessage'])->name('delete_message');
Route::match(['get', 'post'], '/ad', [DashBoardController::class, 'mail'])->name('mail');
Route::match(['get', 'post'], '/admin/bookings', [DashBoardController::class, 'bookings'])->name('bookings');
Route::match(['get', 'post'], '/admin/about', [DashBoardController::class, 'About'])->name('about');
Route::match(['get', 'post'], '/admin/editabout', [DashBoardController::class, 'EditAbout'])->name('editabout');


Route::match(['get', 'post'], '/', [HotelController::class, 'Home']);
Route::match(['get', 'post'], '/room', [HotelController::class, 'Room']);
Route::match(['get', 'post'], '/get-rooms', [HotelController::class, 'getRooms']);
Route::match(['get', 'post'], '/contact', [HotelController::class, 'Contact']);
Route::match(['get', 'post'], '/booking', [HotelController::class, 'Booking']);
Route::match(['get', 'post'], '/get-booking', [HotelController::class, 'getBookings'])->name('get-booking');
Route::match(['get', 'post'], '/admin/staff-booking', [BookingsController::class, 'bookingsByStaff'])->name('staff-booking');
Route::match(['get', 'post'], 'admin/approve-booking/{id}', [BookingsController::class, 'approveBooking'])->name('approve-booking');
Route::get('/admin/bookings-pdf', [BookingsController::class, 'bookingsPdf'])->name('bookings-pdf');
// Route::get('/admin/bookings-pdf', [BookingsController::class, 'ggg'])->name('bookings-pdf');
Route::match(['get', 'post'], '/admin/payment', [PaymentController::class, 'payment'])->name('payment');
Route::match(['get', 'post'], '/admin/payments-report', [PaymentController::class, 'paymentReport'])->name('payment-report');
Route::match(['get', 'post'], '/admin/payments-pdf', [PaymentController::class, 'paymentsPdf'])->name('payment-pdf');

Route::match(['get', 'post'], '/room/{id}', [HotelController::class, 'Orange']);
Route::match(['get', 'post'],'/admin/forgot-password', [ForgotPassWordController::class, 'forgotPassword'])->name('password.request');
Route::get('/admin/reset-password/{token}', [ForgotPassWordController::class, 'resetPassword'])->name('password.reset');
Route::post('/admin/reset-password', [ForgotPassWordController::class, 'updatePassword'])->name('password.update');
Route::get('/admin/forgot-password-success', [ForgotPassWordController::class, 'forgotPasswordSuccess']);
