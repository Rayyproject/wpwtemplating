<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// =========================
// HALAMAN USER
// =========================

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/resume', function () {
    return view('resume');
})->name('resume');


Route::get('/projects', function () {
    return view('projects');
})->name('projects');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// =========================
// LOGIN
// =========================

// Menampilkan halaman login
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');


// Memproses login
Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');


// =========================
// ADMIN
// =========================

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth')
  ->name('admin.dashboard');


// =========================
// LOGOUT
// =========================

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');