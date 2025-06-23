<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            📚 Tambah Data Buku
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 p-6 shadow sm:rounded-lg">

            <form action="{{ route('buku.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="judul" class="block font-medium text-sm text-gray-700 dark:text-white">Judul Buku</label>
                        <input type="text" id="judul" name="judul" class="mt-1 block w-full rounded-full shadow-sm border-gray-300 focus:border-purple-500 focus:ring focus:ring-purple-200 dark:bg-gray-700 dark:text-white" placeholder="Contoh: Laravel Untuk Pemula">
                    </div>

                    <div>
                        <label for="penulis" class="block font-medium text-sm text-gray-700 dark:text-white">Penulis</label>
                        <input type="text" id="penulis" name="penulis" class="mt-1 block w-full rounded-full shadow-sm border-gray-300 focus:border-purple-500 focus:ring focus:ring-purple-200 dark:bg-gray-700 dark:text-white" placeholder="Contoh: John Doe">
                    </div>

                    <div>
                        <label for="penerbit" class="block font-medium text-sm text-gray-700 dark:text-white">Penerbit</label>
                        <input type="text" id="penerbit" name="penerbit" class="mt-1 block w-full rounded-full shadow-sm border-gray-300 focus:border-purple-500 focus:ring focus:ring-purple-200 dark:bg-gray-700 dark:text-white" placeholder="Contoh: Andi Publisher">
                    </div>

                    <div>
                        <label for="tahun" class="block font-medium text-sm text-gray-700 dark:text-white">Tahun Terbit</label>
                        <input type="number" id="tahun" name="tahun" class="mt-1 block w-full rounded-full shadow-sm border-gray-300 focus:border-purple-500 focus:ring focus:ring-purple-200 dark:bg-gray-700 dark:text-white" placeholder="Contoh: 2024">
                    </div>
                </div>

                <div class="mt-6 text-center">
                    <button type="submit" class="inline-flex items-center px-6 py-2 bg-purple-600 border border-transparent rounded-full font-semibold text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 shadow">
                        💾 Simpan Buku
                    </button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
