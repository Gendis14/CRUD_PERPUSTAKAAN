<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* ========== GLOBAL STYLING ========== */
        body {
            background: linear-gradient(to right, #f3e8ff, #e0c3fc);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --purple-soft: rgba(230, 210, 255, 0.35);
            --purple-strong: linear-gradient(to right, #9b59b6, #8e44ad);
        }

        .text-purple {
            color: #6a1b9a;
        }

        /* ========== BUTTON ========== */
        .btn-gradient-purple {
            background: var(--purple-strong);
            border: none;
            color: white;
            transition: 0.3s ease;
        }

        .btn-gradient-purple:hover {
            background: linear-gradient(to right, #8e44ad, #732d91);
            transform: scale(1.02);
        }

        /* ========== NAVBAR ========== */
        .navbar-custom {
            background: var(--purple-strong);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.4rem;
        }

        .nav-link {
            color: #fceff9 !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #fff !important;
            text-decoration: underline;
        }

        /* ========== CONTAINER / CARD ========== */
        .content-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
            padding: 2rem;
            border-radius: 16px;
        }

        /* ========== TABLE ========== */
        .table-purple {
            background: var(--purple-strong);
            color: white;
            font-weight: bold;
        }

        .table-container {
            background: var(--purple-soft);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-radius: 20px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.15);
        }

        .table-glass td, .table-glass th {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(6px);
        }

        .table-glass tr:hover td {
            background-color: rgba(221, 194, 255, 0.4);
            transition: background-color 0.2s ease-in-out;
        }
    </style>
</head>
<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
        <div class="container">
            <a class="navbar-brand text-white" href="#">📚 Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/buku/create">Tambah Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/buku">Daftar Buku</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- KONTEN HALAMAN --}}
    <div class="container my-5">
        <div class="content-card">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
