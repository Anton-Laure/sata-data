<?php

use App\Http\Controllers\UrusanController;
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
Route::get('/urusan', [UrusanController::class,'index']);

Route::get('/organisasi', function () {
    return view('organisasi');
});

Route::get('/infografik', function () {
    return view('infografik');
});
Route::get('/berita', function () {
    return view('artikel');
});

Route::get('/profil', function () {
    return view('profildaerah');
});
Route::get('/produk-hukum', function () {
    return view('produkhukum');
});
Route::get('/sk-tim', function () {
    return view('sktim');
});
Route::get('/metadata', function () {
    return view('metadata');
});
Route::get('/daftar-data', function () {
    return view('daftardata');
});

Route::get('/detail-artikel', function () {
    return view('detailberita');
});

Route::get('/infografik/{slug}', function ($slug) {
    return view('detailinfografik', ['slug' => $slug]);

});
// Route::get('/auth',[LoginController::class,'index'])->name('auth');
