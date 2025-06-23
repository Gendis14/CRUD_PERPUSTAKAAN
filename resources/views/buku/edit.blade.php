@extends('layouts.app')

@section('content')
    <h3 class="mb-4 text-center fw-bold text-purple">✏️ Edit Data Buku</h3>

    {{-- Tampilkan error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger shadow-sm">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Laravel butuh method spoofing untuk PUT/DELETE --}}

        <div class="row g-3">
            <div class="col-md-6">
                <label for="judul" class="form-label fw-semibold">Judul Buku</label>
                <input type="text" class="form-control shadow-sm rounded-pill px-3" id="judul" name="judul" value="{{ old('judul', $buku->judul) }}">
            </div>

            <div class="col-md-6">
                <label for="penulis" class="form-label fw-semibold">Penulis</label>
                <input type="text" class="form-control shadow-sm rounded-pill px-3" id="penulis" name="penulis" value="{{ old('penulis', $buku->penulis) }}">
            </div>

            <div class="col-md-6">
                <label for="penerbit" class="form-label fw-semibold">Penerbit</label>
                <input type="text" class="form-control shadow-sm rounded-pill px-3" id="penerbit" name="penerbit" value="{{ old('penerbit', $buku->penerbit) }}">
            </div>

            <div class="col-md-6">
                <label for="tahun" class="form-label fw-semibold">Tahun Terbit</label>
                <input type="number" class="form-control shadow-sm rounded-pill px-3" id="tahun" name="tahun" value="{{ old('tahun', $buku->tahun) }}">
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-gradient-purple btn-lg px-5 py-2 rounded-pill shadow-sm">💾 Update Buku</button>
        </div>
    </form>
@endsection
