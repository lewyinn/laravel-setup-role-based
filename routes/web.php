<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm']);
    Route::post('/register', [AuthController::class, 'register']);
});

// Dashboard (akses semua role)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Rute khusus admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin-only', function () {
        return 'Halaman khusus Admin';
    });
});

// Rute khusus user
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user-only', function () {
        return 'Halaman ini hanya untuk User.';
    });
});