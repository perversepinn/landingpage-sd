<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::post('/facility/store', [DashboardController::class, 'storeFacility'])->name('facility.store');
Route::post('/announcement/store', [DashboardController::class, 'storeAnnouncement'])->name('announcement.store');
Route::post('/gallery/store', [DashboardController::class, 'storeGallery'])->name('gallery.store');
Route::post('/contact/update', [DashboardController::class, 'updateContact'])->name('contact.update');

// FASILITAS
Route::put('/facility/{id}', [DashboardController::class, 'updateFacility'])->name('facility.update');
Route::delete('/facility/{id}', [DashboardController::class, 'deleteFacility'])->name('facility.delete');

// PENGUMUMAN
Route::put('/announcement/{id}', [DashboardController::class, 'updateAnnouncement'])->name('announcement.update');
Route::delete('/announcement/{id}', [DashboardController::class, 'deleteAnnouncement'])->name('announcement.delete');

// GALERI
Route::delete('/gallery/{id}', [DashboardController::class, 'deleteGallery'])->name('gallery.delete');



Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');