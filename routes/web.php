<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\VolunteerController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::prefix('/relawan')->group(function () {
  Route::get('/palang-merah-remaja', [VolunteerController::class, 'youthRedCross'])->name('relawan.palang-merah-remaja');
  Route::get('/korps-sukarela', [VolunteerController::class, 'volunteerCorps'])->name('relawan.korps-sukarela');
  Route::get('/tenaga-sukarela', [VolunteerController::class, 'voluntaryWorkforce'])->name('relawan.tenaga-sukarela');
});

Route::prefix('/artikel')->group(function () {
  Route::get('/', [ArticleController::class, 'index'])->name('artikel');
  Route::get('/{slug}', [ArticleController::class, 'show'])->name('artikel.show');
});

Route::get('/{page}/{slug}', [PageController::class, 'index'])->name('page');