<?php

use App\Http\Controllers\Admin\GajiController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\PangkatController;
use App\Http\Controllers\Admin\PensiunController;
use App\Http\Controllers\Admin\RekapitulasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::group(['prefix' => 'admin'], function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/rekapitulasi-data-pegawai', [RekapitulasiController::class, 'index'])->name('admin.rekapitulasi');

    Route::group(['prefix' => 'usulan-kenaikan-gaji'], function (){
        Route::get('/', [GajiController::class, 'index'])->name('admin.gaji.index');
        Route::get('/{id}/detail-usulan/', [GajiController::class, 'showDetailUsulanPegawai'])->name('admin.gaji.show');
        Route::post('/create/{id}', [GajiController::class, 'sendSkUsulanKenaikanGaji'])->name('admin.gaji.create');
        Route::get('/{nip}/download/', [GajiController::class, 'download'])->name('admin.gaji.download');
        Route::post('/{id}/verifikasi', [GajiController::class, 'sendSkUsulanKenaikanGaji'])->name('admin.gaji.verifikasi');
        Route::post('/laporan-gaji/download', [LaporanController::class, 'downloadLaporanUsulanKenaikanGaji'])->name('admin.gaji.laporan.download');
    });

    Route::group(['prefix' => 'usulan-kenaikan-pangkat'], function (){
        Route::get('/', [PangkatController::class, 'index'])->name('admin.pangkat.index');
        Route::get('/{id}/detail-usulan/', [PangkatController::class, 'showDetailUsulanPegawai'])->name('admin.pangkat.show');
        Route::post('/create/{id}', [PangkatController::class, 'sendSkUsulanKenaikanPangkat'])->name('admin.pangkat.create');
        Route::get('/{nip}/download/', [PangkatController::class, 'download'])->name('admin.pangkat.download');
        Route::post('/{id}/verifikasi', [PangkatController::class, 'sendSkUsulanKenaikanPangkat'])->name('admin.pangkat.verifikasi');
        Route::post('/laporan-pangkat/download', [LaporanController::class, 'downloadLaporanUsulanKenaikanPangkat'])->name('admin.pangkat.laporan.download');
    });

    Route::group(['prefix' => 'usulan-pensiun'], function (){
        Route::get('/', [PensiunController::class, 'index'])->name('admin.pensiun.index');
        Route::get('/{id}/detail-usulan/', [PensiunController::class, 'showDetailUsulanPegawai'])->name('admin.pensiun.show');
        Route::post('/create/{id}', [PensiunController::class, 'sendSkUsulanPensiun'])->name('admin.pensiun.create');
        Route::get('/{nip}/download/', [PensiunController::class, 'download'])->name('admin.pensiun.download');
        Route::post('/{id}/verifikasi', [PensiunController::class, 'sendSkUsulanPensiun'])->name('admin.pensiun.verifikasi');
        Route::post('/laporan-pensiun/download', [LaporanController::class, 'downloadLaporanUsulanPensiun'])->name('admin.pensiun.laporan.download');
    });
});
