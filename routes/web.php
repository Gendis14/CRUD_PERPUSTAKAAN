<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Semua route ini hanya bisa diakses jika user sudah login
Route::middleware(['auth'])->group(function () {

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
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
