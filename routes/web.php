<?php

use Illuminate\Support\Facades\Route;

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
// HALAMAN ADMIN
// =========================

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');