<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/kategori', function () {
    return view('kabkota');
});
Route::get('/kabkota', function () {
    return view('category');
});
Route::get('/urusan', function () {
    return view('urusan');
});

Route::get('/infografik', function () {
    return view('infografik');
});

Route::get('/infografik/{slug}', function ($slug) {
    return view('detailinfografik', ['slug' => $slug]);
});
// Route::get('/auth',[LoginController::class,'index'])->name('auth');
