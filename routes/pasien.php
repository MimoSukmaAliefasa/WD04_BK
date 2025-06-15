<?php

use App\Http\Controllers\Pasien\JanjiPeriksaController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:pasien'])->prefix('pasien')->name('pasien.')->group(function () {
    Route::get('/dashboard', function() {
        return view('pasien.dashboard');
    })->name('dashboard');
    
    Route::get('/janji-periksa', [JanjiPeriksaController::class, 'index'])->name('janji-periksa.index');
    Route::post('/janji-periksa', [JanjiPeriksaController::class, 'store'])->name('janji-periksa.store');
});