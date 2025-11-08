<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Public routes
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/tentang', [PublicController::class, 'about'])->name('about');
Route::get('/syarat-ketentuan', [PublicController::class, 'terms'])->name('terms');
Route::get('/kontak', [PublicController::class, 'contact'])->name('contact');
Route::get('/kebijakan-privasi', [PublicController::class, 'privacy'])->name('privacy');

Route::get('/test-tailwind', function () {
    return view('test-tailwind');
});

// Include admin routes
require_once __DIR__.'/admin.php';
