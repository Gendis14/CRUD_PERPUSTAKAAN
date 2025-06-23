<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            📚 Daftar Buku
        </h2>
    </x-slot>

    <div class="py-12"> {{-- <- ini penting! Breeze pakai ini untuk tampilkan konten --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" {{-- hilang setelah 3 detik --}} x-show="show" x-transition
                    class="mb-4 px-4 py-3 rounded-lg bg-green-100 border border-green-300 text-green-800 flex items-center space-x-2 shadow">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif



            {{-- Tombol Tambah --}}
            <div class="mb-4 text-end">
                <a href="{{ route('buku.create') }}"
                    class="inline-block bg-purple-600 text-white px-4 py-2 rounded shadow hover:bg-purple-700">
                    ➕ Tambah Buku
                </a>
            </div>

            {{-- Tabel --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
                <table class="min-w-full text-center">
                    <thead class="bg-purple-600 text-white">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white">
                        @forelse ($bukus as $buku)
                            <tr class="border-t">
                                <td class="py-2">{{ $loop->iteration }}</td>
                                <td>{{ $buku->judul }}</td>
                                <td>{{ $buku->penulis }}</td>
                                <td>{{ $buku->penerbit }}</td>
                                <td>{{ $buku->tahun }}</td>
                                <td>
                                    <a href="{{ route('buku.edit', $buku->id) }}"
                                        class="text-yellow-500 hover:underline">✏️ Edit</a>
                                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="inline"
                                        onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline ml-2">🗑️
                                            Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="py-4">Belum ada data buku.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
