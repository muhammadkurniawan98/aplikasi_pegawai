<?php

use App\Http\Controllers\PangkatController;
use App\Http\Controllers\PensiunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GajiController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/picture/save', [DashboardController::class, 'savePhoto'])->name('picture.save');

Route::group(['prefix' => 'usulan-kenaikan-gaji'], function (){
    Route::get('/', [GajiController::class, 'index'])->name('gaji.index');
    Route::get('/create', [GajiController::class, 'showUsulanKenaikanGajiForm'])->name('gaji.create');
    Route::post('/store', [GajiController::class, 'sendUsulanKenaikanGaji'])->name('gaji.store');
    Route::get('/{filename}/download', [GajiController::class, 'download'])->name('download.gaji.sk');
});

Route::group(['prefix' => 'usulan-kenaikan-pangkat'], function (){
    Route::get('/', [PangkatController::class, 'index'])->name('pangkat.index');
    Route::get('/create', [PangkatController::class, 'showUsulanKenaikanPangkatForm'])->name('pangkat.create');
    Route::post('/store', [PangkatController::class, 'sendUsulanKenaikanPangkat'])->name('pangkat.store');
    Route::get('/{filename}/download', [PangkatController::class, 'download'])->name('download.pangkat.sk');
});

Route::group(['prefix' => 'usulan-pensiun'], function (){
    Route::get('/', [PensiunController::class, 'index'])->name('pensiun.index');
    Route::get('/create', [PensiunController::class, 'showUsulanPensiunForm'])->name('pensiun.create');
    Route::post('/store', [PensiunController::class, 'sendUsulanPensiun'])->name('pensiun.store');
    Route::get('/{filename}/download', [PensiunController::class, 'download'])->name('download.pensiun.sk');
});

