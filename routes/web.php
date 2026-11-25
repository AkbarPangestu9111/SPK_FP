<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/rekomendasi', function () {
    return view('pages.recommendation');
    
});

Route::get('/hasil-rekomendasi', function () {
    return view('pages.result');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/smartphone', function () {
    return view('admin.smartphone');
});

Route::get('/admin/kriteria', function () {
    return view('admin.kriteria');
});
use App\Http\Controllers\AuthController;

// Rute Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);

// Rute Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register']);

// Rute Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');