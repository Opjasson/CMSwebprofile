<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Auth;

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
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard.home');
    }
);
