@extends('layouts.app')

@section('content')
    <h3 class="mb-4 text-center fw-bold text-purple">📚 Tambah Data Buku</h3>

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label for="judul" class="form-label fw-semibold">Judul Buku</label>
                <input type="text" class="form-control shadow-sm rounded-pill px-3" id="judul" name="judul" placeholder="Contoh: Laravel Untuk Pemula">
            </div>

            <div class="col-md-6">
                <label for="penulis" class="form-label fw-semibold">Penulis</label>
                <input type="text" class="form-control shadow-sm rounded-pill px-3" id="penulis" name="penulis" placeholder="Contoh: John Doe">
            </div>

            <div class="col-md-6">
                <label for="penerbit" class="form-label fw-semibold">Penerbit</label>
                <input type="text" class="form-control shadow-sm rounded-pill px-3" id="penerbit" name="penerbit" placeholder="Contoh: Andi Publisher">
            </div>

            <div class="col-md-6">
                <label for="tahun" class="form-label fw-semibold">Tahun Terbit</label>
                <input type="number" class="form-control shadow-sm rounded-pill px-3" id="tahun" name="tahun" placeholder="Contoh: 2024">
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-gradient-purple btn-lg px-5 py-2 rounded-pill shadow-sm">💾 Simpan Buku</button>
        </div>
    </form>
@endsection
