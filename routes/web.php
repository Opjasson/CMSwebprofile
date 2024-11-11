<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Auth;



Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login', [LoginController::class, 'action'])->name('auth.login.action');
Route::get('/dashboard',[HomeController::class, 'index'])->name('dashboard.home');
