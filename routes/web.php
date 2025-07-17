<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VolunteerController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/relawan')->group(function () {
    Route::get('/palang-merah-remaja', [VolunteerController::class, 'youthRedCross']);
});