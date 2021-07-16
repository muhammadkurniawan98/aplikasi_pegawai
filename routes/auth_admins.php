<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;

Route::group(['prefix' => 'admin'], function (){
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
    
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('/register', [RegisterController::class, 'register'])->name('admin.register');

    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');
});
