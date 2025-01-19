<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\DonationController;

Route::get('/', [AuthManager::class, 'home'])->name('home');

// Route::middleware([loginCheck::class])->group(function () {
//     Route::get('/donate', [DonateController::class, 'donate'])->name('donate');
// });

Route::get('/donation', [DonationController::class, 'index'])->name('donation');
Route::post('/donation/store', [DonationController::class, 'submitDonation'])->name('donation.store');
Route::post('/notification/handler', [DonationController::class, 'notificationHandler'])->name('notification.handler');


Route::get('/about-us', [UserController::class, 'about'])->name('about');

Route::get('/register', [AuthManager::class, 'registration'])->name('register');
Route::post('/register', [AuthManager::class, 'createUser'])->name('register.post');

Route::get('/login', [AuthManager::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [AuthManager::class, 'loginAuthentication'])->name('login.post');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});


Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');

