<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [PageController::class, 'tampilkanLogin'])->name('login');
Route::get('/dashboard', [PageController::class, 'tampilkanDashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'tampilkanProfile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'tampilkanPengelolaan'])->name('pengelolaan');
Route::post('/login-process', [PageController::class, 'handleLogin'])->name('login.handle');
