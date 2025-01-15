<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;

session_start();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [PasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [PasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [PasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [PasswordController::class, 'reset'])->name('password.update');

// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/auth/google/redirect', [SocialController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [SocialController::class, 'handleGoogleCallback']);
Route::get('/auth/facebook/redirect', [SocialController::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('/auth/facebook/callback', [SocialController::class, 'handleFacebookCallback']);
