<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;

//Autentikasi dan Registrasi User
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::group(['prefix' => '/password', 'name' => 'password.'], function (){
    Route::get('/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('confirm');
    Route::post('/confirm', [ConfirmPasswordController::class, 'confirm'])->name('confirm');

    Route::post('/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('email');
    Route::get('/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('request');
    Route::post('/reset', [ResetPasswordController::class, 'reset'])->name('update');
    Route::get('/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('reset');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
