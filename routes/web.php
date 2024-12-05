<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\Konten\SambutanController;
use App\Http\Controllers\Dashboard\Konten\MenuController;
use App\Http\Controllers\Setting\Password\PasswordController;
use App\Http\Controllers\Setting\Profile\ProfileController;

Route::get('/', function () {
    return view("welcome");
});



// middleware
Route::middleware(['guest'])->group(
    function () {
        Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
        Route::post('/login', [LoginController::class, 'action'])->name('auth.login.action');
    }
);

Route::middleware(['auth'])->group(
    function () {
        Route::post('/logout', [LogoutController::class, 'logout'])->name('auth.logout');
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard.home');
        Route::get('/dashboard/sambutan', [SambutanController::class, 'index'])->name('dashboard.konten');
        Route::post('/dashboard/sambutan', [SambutanController::class, 'action'])->name('dashboard.konten.action');
        Route::get('/dashboard/menu', [MenuController::class, 'index'])->name('dashboard.menu');
        Route::get('/dashboard/menu/tambah', [MenuController::class, 'addMenuHalaman'])->name('dashboard.menu.tambah');
        Route::get('/dashboard/menu/tambah/file', [MenuController::class, 'fileDownload'])->name('dashboard.menu.tambah.file');
        Route::post('/dashboard/menu/tambah', [MenuController::class, 'createHal'])->name('dashboard.menu.tambah.action');

        
        Route::get('/dashboard/profile/{userId}', [ProfileController::class, 'index'])->name('user.profile');
        Route::put('/dashboard/profile/{userId}', [ProfileController::class, 'update'])->name('user.profile.update');
        Route::get('/dashboard/profile/{userId}/password', [PasswordController::class, 'index'])->name('user.profile.password');
        Route::put('/dashboard/profile/{userId}/password', [PasswordController::class, 'update'])->name('user.profile.password.update');

    }
);
