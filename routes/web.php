<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/login',[PageController::class, 'index'])->name('login');
Route::get('/profile',[PageController::class, 'Profilepage'])->name('profile');
Route::post('/login', [PageController::class, 'login']);
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'kelas'])->name('pengelolaan');
