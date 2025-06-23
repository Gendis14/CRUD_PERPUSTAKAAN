<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Tampilkan daftar semua buku.
     */
    public function index()
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    /**
     * Tampilkan form tambah buku baru.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Simpan buku baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required|digits:4'
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')
            ->with('success', '📚 Buku berhasil disimpan.');
    }

    /**
     * Tampilkan form edit untuk buku tertentu.
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    /**
     * Perbarui data buku di database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required|digits:4'
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect()->route('buku.index')
            ->with('success', '✏️ Buku berhasil diperbarui.');
    }

    /**
     * Hapus buku dari database.
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')
            ->with('success', '🗑️ Buku berhasil dihapus.');
    }
}
