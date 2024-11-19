<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\Konten\SambutanController;
use App\Http\Controllers\Dashboard\Konten\MenuController;


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

Route::middleware(['auth'])->prefix('dashboard')->group(
    function () {
        Route::get('/', [HomeController::class, 'index'])->name('dashboard.home');
        Route::get('/sambutan', [SambutanController::class, 'index'])->name('dashboard.konten');
        Route::get('/menu', [MenuController::class, 'index'])->name('dashboard.menu');
    }
);
