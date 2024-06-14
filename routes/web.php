<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DeviceController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Aparatos o dispositivos
Route::post('/device/store', [DeviceController::class, 'store'])->middleware(['auth', 'verified'])->name('device.store');
Route::post('/device/update', [DeviceController::class, 'update'])->middleware(['auth', 'verified'])->name('device.update');

// Reportes
Route::post('/report/store', [ReportController::class, 'store'])->middleware(['auth', 'verified'])->name('report.store');
Route::post('/report/update', [ReportController::class, 'update'])->middleware(['auth', 'verified'])->name('report.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
