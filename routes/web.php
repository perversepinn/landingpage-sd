<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');

Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
