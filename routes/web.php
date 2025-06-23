<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Di sini kamu bisa mendaftarkan semua route web untuk aplikasi Laravel.
| File ini akan diload secara otomatis oleh RouteServiceProvider.
|--------------------------------------------------------------------------
*/

// Halaman utama bisa diarahkan langsung ke daftar buku
Route::get('/', function () {
    return redirect()->route('buku.index');
});

// ==================
// ROUTE CRUD BUKU
// ==================

// Menampilkan daftar buku
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');

// Form tambah buku
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

// Simpan buku baru
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');

// Form edit buku
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');

// Update data buku
Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');

// Hapus data buku
Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

