<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes — Nippon Tomoki Indonesia
|--------------------------------------------------------------------------
| Semua route halaman utama LPK: Beranda, Tentang Kami, Layanan, Kontak.
*/

Route::get('/', [Controller::class, 'beranda'])->name('beranda');
Route::get('/tentang-kami', [Controller::class, 'tentangKami'])->name('tentang-kami');
Route::get('/layanan', [Controller::class, 'layanan'])->name('layanan');
Route::get('/kontak', [Controller::class, 'kontak'])->name('kontak');

// Endpoint opsional: redirect tombol "Konsultasi Gratis" ke WhatsApp
// lewat server (berguna kalau nanti mau melacak klik / ganti nomor
// tanpa harus mengubah blade).
Route::get('/konsultasi-gratis', [Controller::class, 'konsultasiGratis'])->name('konsultasi-gratis');
