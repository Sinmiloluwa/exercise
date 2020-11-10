<?php

use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


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

Route::get('/email', function () {
    Mail::to('test@email.com')->send(new WelcomeEmail());
    return new WelcomeEmail();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('payments', [App\Http\Controllers\PaymentController::class, 'index']);
Route::post('payments', [App\Http\Controllers\PaymentController::class, 'store'])->middleware('auth');
Route::get('notifications',[App\Http\Controllers\UserNotificationsController::class,'show'])->middleware('auth');
Route::resource('posts', PostController::class);
