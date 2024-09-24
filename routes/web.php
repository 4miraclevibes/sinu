<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/program/{announcement}', [LandingController::class, 'program'])->name('program');
Route::get('/berita', [LandingController::class, 'berita'])->name('berita');
Route::get('/berita/{announcement}', [LandingController::class, 'beritaShow'])->name('berita.show');
Route::get('/aktifitas', [LandingController::class, 'aktifitas'])->name('aktifitas');
Route::get('/aktifitas/{announcement}', [LandingController::class, 'aktifitasShow'])->name('aktifitas.show');
Route::get('/pengumuman', [LandingController::class, 'pengumuman'])->name('pengumuman');
Route::get('/pengumuman/{announcement}', [LandingController::class, 'pengumumanShow'])->name('pengumuman.show');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //user
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');
    //announcement
    Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
    Route::get('/announcements/create', [AnnouncementController::class, 'create'])->name('announcements.create');
    Route::post('/announcements/store', [AnnouncementController::class, 'store'])->name('announcements.store');
    Route::get('/announcements/{announcement}/edit', [AnnouncementController::class, 'edit'])->name('announcements.edit');
    Route::put('/announcements/{announcement}/update', [AnnouncementController::class, 'update'])->name('announcements.update');
    Route::delete('/announcements/{announcement}/destroy', [AnnouncementController::class, 'destroy'])->name('announcements.destroy');
});

require __DIR__.'/auth.php';
