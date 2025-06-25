<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookHub - Temukan Buku Favoritmu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex space-x-7">
                    <a href="#" class="flex items-center">
                        <span class="font-semibold text-gray-900 text-2xl">
                            <i class="fas fa-book-open mr-2 text-purple-600"></i> BookHub
                        </span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#hero"
                        class="py-4 px-2 text-purple-600 border-b-4 border-purple-600 font-semibold">Beranda</a>
                    <a href="#kategori"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-purple-600 transition duration-300">Kategori</a>
                    <a href="#"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-purple-600 transition duration-300">Populer</a>
                    <a href="#"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-purple-600 transition duration-300">Tentang</a>
                </div>

                <!-- Aksi kanan -->
                <div class="hidden md:flex items-center space-x-3">
                    <a href="#"
                        class="py-2 px-3 font-medium text-white bg-purple-600 rounded hover:bg-purple-700 transition duration-300">
                        <i class="fas fa-bookmark mr-1"></i> Koleksi Saya
                    </a>

                    @guest
                        <a href="{{ route('login') }}"
                            class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-purple-100 hover:text-purple-600 transition duration-300">
                            <i class="fas fa-user mr-1"></i> Masuk
                        </a>
                        <a href="{{ route('register') }}"
                            class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-purple-100 hover:text-purple-600 transition duration-300">
                            <i class="fas fa-user mr-1"></i> Daftar
                        </a>
                    @endguest

                    @auth
                        <div class="relative inline-block text-left">
                            <button id="userMenuButton"
                                class="flex items-center gap-2 px-3 py-2 rounded-full hover:bg-purple-100 transition duration-300 focus:outline-none">
                                <div
                                    class="w-10 h-10 flex items-center justify-center rounded-full bg-purple-200 text-purple-800 text-2xl">
                                    <i class="fas fa-user-circle"></i>
                                </div>
                                <span class="text-gray-700 font-medium">{{ Auth::user()->name }}</span>
                            </button>

                            <div id="userDropdown"
                                class="hidden absolute right-0 mt-2 w-44 bg-white border rounded shadow-md z-50">
                                <a href="#"
                                    class="block px-4 py-2 text-gray-700 hover:bg-purple-100 hover:text-purple-600">
                                    Profil
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-purple-100 hover:text-purple-600">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endauth
                </div>

                <!-- Mobile button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-500 hover:text-purple-600" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden mobile-menu transition-all duration-300">
            <ul>
                <li><a href="#hero" class="block text-sm px-4 py-4 text-white bg-purple-600 font-semibold">Beranda</a>
                </li>
                <li><a href="#kategori"
                        class="block text-sm px-4 py-4 hover:bg-purple-100 transition duration-300">Kategori</a></li>
                <li><a href="#"
                        class="block text-sm px-4 py-4 hover:bg-purple-100 transition duration-300">Populer</a></li>
                <li><a href="#"
                        class="block text-sm px-4 py-4 hover:bg-purple-100 transition duration-300">Tentang</a></li>

                @guest
                    <li><a href="{{ route('login') }}"
                            class="block text-sm px-4 py-4 hover:bg-purple-100 transition duration-300 text-purple-700">Masuk</a>
                    </li>
                    <li><a href="{{ route('register') }}"
                            class="block text-sm px-4 py-4 hover:bg-purple-100 transition duration-300 text-purple-700">Daftar</a>
                    </li>
                @endguest

                @auth
                    <li class="relative">
                        <button id="userMenuMobileButton"
                            class="w-full text-left flex items-center gap-2 px-4 py-3 hover:bg-purple-100 text-purple-800 font-medium transition duration-300">
                            <i class="fas fa-user-circle text-lg"></i> {{ Auth::user()->name }}
                        </button>
                        <div id="userDropdownMobile" class="hidden bg-white border rounded shadow-md mt-1 mx-4">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-100">Profil</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-purple-100">Logout</button>
                            </form>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Mobile menu toggle
            const menuBtn = document.querySelector(".mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            if (menuBtn && menu) {
                menuBtn.addEventListener("click", () => {
                    menu.classList.toggle("hidden");
                });
            }

            // Dropdown user desktop
            const userMenuButton = document.getElementById('userMenuButton');
            const userDropdown = document.getElementById('userDropdown');

            if (userMenuButton && userDropdown) {
                userMenuButton.addEventListener('click', function(e) {
                    e.stopPropagation();
                    userDropdown.classList.toggle('hidden');
                });

                document.addEventListener('click', function() {
                    userDropdown.classList.add('hidden');
                });
            }

            // Dropdown user mobile
            const userMenuMobileButton = document.getElementById('userMenuMobileButton');
            const userDropdownMobile = document.getElementById('userDropdownMobile');

            if (userMenuMobileButton && userDropdownMobile) {
                userMenuMobileButton.addEventListener('click', function(e) {
                    e.stopPropagation();
                    userDropdownMobile.classList.toggle('hidden');
                });

                document.addEventListener('click', function() {
                    userDropdownMobile.classList.add('hidden');
                });
            }
        });
    </script>


    <!-- Hero Section -->
    <section id="hero" class="hero-gradient text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Temukan Buku Favoritmu</h1>
            <p class="text-xl md:text-2xl mb-12 max-w-2xl mx-auto">Jelajahi koleksi lebih dari 10.000 buku dari berbagai
                genre dan penulis terbaik</p>

            <!-- Search Box -->
            <div class="max-w-2xl mx-auto relative">
                <input type="text" id="searchInput" placeholder="Cari judul buku, penulis, atau kategori..."
                    class="w-full py-4 px-6 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-purple-600 shadow-lg">
                <button id="searchButton"
                    class="absolute right-2 top-2 bg-purple-700 text-white py-2 px-6 rounded-full hover:bg-purple-800 transition duration-300">Cari</button>
            </div>

            <div class="mt-8 flex flex-wrap justify-center gap-2">
                <span class="text-sm bg-white bg-opacity-20 px-4 py-2 rounded-full">Fiksi</span>
                <span class="text-sm bg-white bg-opacity-20 px-4 py-2 rounded-full">Non-Fiksi</span>
                <span class="text-sm bg-white bg-opacity-20 px-4 py-2 rounded-full">Sains</span>
                <span class="text-sm bg-white bg-opacity-20 px-4 py-2 rounded-full">Sejarah</span>
                <span class="text-sm bg-white bg-opacity-20 px-4 py-2 rounded-full">Bisnis</span>
            </div>
        </div>
    </section>

    <!-- Featured Books -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Rekomendasi Buku</h2>
               
                    <a href="#" id="lihatSemuaBtn" class="text-purple-600 hover:text-purple-800 font-medium">
                        Lihat Semua <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8" id="booksContainer">
                <!-- Books will be loaded here by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section id="kategori" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Jelajahi Kategori</h2>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-lg transition duration-300">
                    <div class="bg-purple-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-book text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Fiksi</h3>
                    <p class="text-gray-500 text-sm">1,240 Buku</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-lg transition duration-300">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-flask text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Sains</h3>
                    <p class="text-gray-500 text-sm">890 Buku</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-lg transition duration-300">
                    <div class="bg-green-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-chart-line text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Bisnis</h3>
                    <p class="text-gray-500 text-sm">750 Buku</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-lg transition duration-300">
                    <div class="bg-yellow-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-landmark text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Sejarah</h3>
                    <p class="text-gray-500 text-sm">620 Buku</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-lg transition duration-300">
                    <div class="bg-red-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-heart text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Romansa</h3>
                    <p class="text-gray-500 text-sm">1,050 Buku</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-lg transition duration-300">
                    <div class="bg-indigo-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-brain text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Psikologi</h3>
                    <p class="text-gray-500 text-sm">480 Buku</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Apa Kata Pembaca?</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-purple-200 rounded-full flex items-center justify-center text-purple-600 font-bold mr-4">
                            AS</div>
                        <div>
                            <h4 class="font-semibold">Ahmad Surya</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Koleksi bukunya lengkap sekali! Saya bisa menemukan buku langka yang
                        tidak tersedia di toko buku biasa."</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-blue-200 rounded-full flex items-center justify-center text-blue-600 font-bold mr-4">
                            DR</div>
                        <div>
                            <h4 class="font-semibold">Dina Rahma</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Antarmuka yang sangat user-friendly. Saya bisa dengan mudah menemukan
                        buku yang sesuai dengan minat saya."</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-green-200 rounded-full flex items-center justify-center text-green-600 font-bold mr-4">
                            FP</div>
                        <div>
                            <h4 class="font-semibold">Fajar Putra</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Rekomendasi bukunya sangat tepat! Sudah menemukan beberapa buku bagus
                        yang tidak saya ketahui sebelumnya."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-purple-700 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Bergabunglah dengan Komunitas Pembaca Kami</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Dapatkan akses ke koleksi buku eksklusif, rekomendasi personal,
                dan diskon khusus member.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                @guest
                    <a href="{{ route('register') }}"
                        class="bg-white text-purple-700 font-semibold py-3 px-8 rounded-full hover:bg-gray-100 transition duration-300">
                        Daftar Sekarang
                    </a>
                @endguest

                <a href="#"
                    class="border-2 border-white text-white font-semibold py-3 px-8 rounded-full hover:bg-white hover:text-purple-700 transition duration-300">
                    Pelajari Lebih Lanjut
                </a>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 flex items-center"><i class="fas fa-book-open mr-2"></i> BookHub
                    </h3>
                    <p class="text-gray-400">Temukan dunia dalam setiap halaman. BookHub adalah platform terbaik untuk
                        menemukan dan menikmati buku-buku berkualitas.</p>
                    <div class="flex mt-6 space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Beranda</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Koleksi Buku</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Kategori</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-4">Kategori</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Fiksi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Non-Fiksi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Sains</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Bisnis</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Sejarah</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-4">Kontak Kami</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                            <span>Jl. Buku No. 123, Jakarta, Indonesia</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt mt-1 mr-3"></i>
                            <span>+62 123 4567 890</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3"></i>
                            <span>info@bookhub.id</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2025 BookHub membaca buku berkualitas</p>
            </div>
        </div>
    </footer>
    <script>
        const booksContainer = document.getElementById('booksContainer');
        const searchInput = document.getElementById('searchInput');
        const searchButton = document.getElementById('searchButton');
        const lihatSemuaBtn = document.getElementById('lihatSemuaBtn');

        let allBooks = [];
        let showAll = false; // Menandakan apakah sedang menampilkan semua buku

        function displayBooks(booksToDisplay) {
            booksContainer.innerHTML = '';

            if (booksToDisplay.length === 0) {
                booksContainer.innerHTML = `
                <div class="text-center text-gray-500 py-12">
                    <p>Tidak ada buku yang ditemukan.</p>
                </div>
            `;
                return;
            }

            booksToDisplay.forEach(book => {
                const bookElement = document.createElement('div');
                bookElement.className =
                    'book-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300';
                bookElement.innerHTML = `
                <div class="relative">
                    <img src="/storage/gambar_buku/${book.gambar}" alt="${book.judul}" class="w-full h-64 object-cover">
                    <div class="absolute top-2 right-2 bg-yellow-400 text-xs font-bold px-2 py-1 rounded-full flex items-center">
                        <span>⭐ ${book.rating ?? '4.5'}</span>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-1 truncate">${book.judul}</h3>
                    <p class="text-gray-600 text-sm mb-1">Penulis: ${book.penulis}</p>
                    <p class="text-gray-500 text-xs mb-2">Tahun: ${book.tahun ?? '-'}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded">${book.penerbit}</span>
                        <button class="text-purple-600 hover:text-purple-800">
                            <i class="fas fa-bookmark"></i>
                        </button>
                    </div>
                </div>
            `;
                booksContainer.appendChild(bookElement);
            });
        }

        // Tampilkan sebagian buku saat awal
        function displayInitialBooks() {
            showAll = false;
            const limitedBooks = allBooks.slice(0, 4); // Ganti jumlah sesuai kebutuhan
            displayBooks(limitedBooks);
        }

        // Saat tombol "Lihat Semua" ditekan
        lihatSemuaBtn.addEventListener('click', function(e) {
            e.preventDefault();
            showAll = true;
            displayBooks(allBooks);
            lihatSemuaBtn.style.display = 'none'; // Sembunyikan tombol setelah ditekan
        });

        // Ambil data dari backend
        fetch('/api/buku')
            .then(res => res.json())
            .then(data => {
                allBooks = data;
                displayInitialBooks();
            });

        // Fungsi pencarian
        function searchBooks() {
            const keyword = searchInput.value.toLowerCase().trim();

            if (keyword === '') {
                // Jika tidak ada keyword dan tidak sedang lihat semua, tampilkan sebagian
                showAll ? displayBooks(allBooks) : displayInitialBooks();
                return;
            }

            const filteredBooks = allBooks.filter(book =>
                book.judul.toLowerCase().includes(keyword) ||
                book.penulis.toLowerCase().includes(keyword) ||
                (book.kategori && book.kategori.toLowerCase().includes(keyword)) ||
                (book.tahun && book.tahun.toString().includes(keyword))
            );

            displayBooks(filteredBooks);
        }

        // Event tombol cari
        searchButton.addEventListener('click', searchBooks);

        // Event tekan Enter di input
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchBooks();
            }
        });

        // Tampilkan semua jika user mulai mengetik
        searchInput.addEventListener('input', function() {
            const keyword = searchInput.value.trim().toLowerCase();
            if (keyword === '') {
                showAll ? displayBooks(allBooks) : displayInitialBooks();
            }
        });
    </script>


</body>

</html>
