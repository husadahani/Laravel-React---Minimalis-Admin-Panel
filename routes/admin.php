<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;

// Admin authentication routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login']);
    });

    Route::middleware('auth.admin')->group(function () {
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
        
        // Admin dashboard
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        
        // Other admin pages
        Route::get('/products', [AdminController::class, 'products'])->name('products');
        Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
        Route::get('/users', [AdminController::class, 'users'])->name('users');
        Route::get('/blog', [AdminController::class, 'blog'])->name('blog');
        Route::get('/marketing', [AdminController::class, 'marketing'])->name('marketing');
        Route::get('/logs', [AdminController::class, 'logs'])->name('logs');
        Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
        Route::get('/site-settings', [AdminController::class, 'siteSettings'])->name('site-settings');
        Route::get('/smtp', [AdminController::class, 'smtp'])->name('smtp');
    });
});