<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmEase - Manajemen Pertanian Lahan Kering Kupang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ99SjP/QjGqHzpXqQ6S8pS2Q2dOaJv8vP1XkLz5S7d+y+1d45t5XvX/Q9J/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Terapkan font Poppins ke seluruh body */
            background-color: #f8f9fa; 
        }
        .navbar-brand {
            font-weight: bold;
            color: #28a745 !important; 
        }
        .navbar-nav .nav-item .nav-link.active {
            color: #28a745 !important; 
            font-weight: 600; /* Sedikit lebih tebal untuk aktif */
            border-bottom: 2px solid #28a745; 
            padding-bottom: 5px; 
        }
        @media (max-width: 991.98px) {
            .navbar-nav .nav-item .nav-link.active {
                background-color: #e9f5e9; 
                border-bottom: none; 
                border-left: 3px solid #28a745; 
                padding-left: 10px;
            }
        }
        .footer {
            background-color: #e9ecef;
            padding: 20px 0;
            color: #6c757d;
        }
        .feature-card {
            height: 100%;
        }
        .feature-card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .feature-card .card-title {
            color: #28a745;
        }
        .feature-card i {
            color: #28a745; 
            margin-right: 10px;
        }
        .btn-farm {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
        }
        .btn-farm:hover {
            background-color: #218838;
            border-color: #1e7e34;
            color: white;
        }
        .bg-light-green { background-color: #e6ffe6; }
        .bg-light-orange { background-color: #fff8e6; }
        .bg-light-red { background-color: #ffe6e6; }
        .card-body .d-flex i {
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-leaf"></i> FarmEase
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('perencanaan-tanam') ? 'active' : '' }}" href="{{ url('/perencanaan-tanam') }}">
                            <i class="fas fa-seedling"></i> Perencanaan Tanam
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pencatatan-input') ? 'active' : '' }}" href="{{ url('/pencatatan-input') }}">
                            <i class="fas fa-tractor"></i> Pencatatan Input
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('cuaca-lokal') ? 'active' : '' }}" href="{{ url('/cuaca-lokal') }}">
                            <i class="fas fa-cloud-sun"></i> Cuaca Lokal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('harga-pasar') ? 'active' : '' }}" href="{{ url('/harga-pasar') }}">
                            <i class="fas fa-money-bill-wave"></i> Harga Pasar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">© {{ date('Y') }} FarmEase. Dibuat dengan <i class="fas fa-heart text-danger"></i> untuk Petani Kecil Kabupaten Kupang.</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    @stack('scripts')
</body>
</html>