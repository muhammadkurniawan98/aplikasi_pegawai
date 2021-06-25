<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;

Route::group(['prefix' => 'admin'], function (){
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login');

    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');
});