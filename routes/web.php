<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.web-berita');
});

Route::get('/lifestyle', function () {
    return view('public.lifestyle');
});

Route::get('/music', function () {
    return view('public.music');
});

Route::get('/sport', function () {
    return view('public.sport');
});

Route::get('/knowledge', function () {
    return view('public.knowledge');
});

Route::get('/other', function () {
    return view('public.other');
});

Route::get('/home', function () {
    return view('public.web-berita');
});

Route::get('/dh', function () {
    return view('admin.dashboard');
});

use App\Http\Controllers\BeritaController;

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/home', [BeritaController::class, 'home']);

use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
