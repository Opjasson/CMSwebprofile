<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;



Route::get('/dashboard',[HomeController::class, 'index'])->name('dashboard.home');
