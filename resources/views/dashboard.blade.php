@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-10 text-center">
            <h1 class="display-5 text-success mb-3 animate__animated animate__fadeInDown">
                <i class="fas fa-seedling"></i> Selamat Datang, Petani Kupang!
            </h1>
            <p class="lead text-muted animate__animated animate__fadeInUp">
                FarmEase siap bantu Anda mengelola pertanian lahan kering dengan lebih mudah dan cerdas.
            </p>
            <hr class="my-4 animate__animated animate__zoomIn">
            <a href="{{ url('/perencanaan-tanam') }}" class="btn btn-lg btn-farm animate__animated animate__bounceIn">
                Mulai Rencanakan Tanam Sekarang <i class="fas fa-chevron-right ms-2"></i>
            </a>
        </div>
    </div>

    {{-- Bagian Ringkasan Data Penting --}}
    <div class="row mb-5">
        <div class="col-12 text-center mb-4">
            <h3 class="text-primary animate__animated animate__fadeInLeft">
                <i class="fas fa-chart-bar me-2"></i> Sekilas Kondisi Pertanian Anda
            </h3>
            <p class="text-muted animate__animated animate__fadeInRight">Data simulasi untuk membantu Anda melihat potensi FarmEase.</p>
        </div>

        {{-- Card Ringkasan Rencana Tanam Aktif --}}
        <div class="col-md-6 col-lg-4 mb-4 animate__animated animate__flipInX">
            <div class="card shadow-sm h-100 bg-light-green border-success">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title text-success mb-3"><i class="fas fa-chart-area me-2"></i> Lahan Aktif</h5>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-chart-pie fa-3x text-success opacity-75 me-3"></i>
                        <div>
                            <p class="card-text mb-0 fs-5 text-dark">Total <strong class="text-success">2</strong> Lahan Dikelola</p>
                            <small class="text-muted">Jagung, Ubi Jalar</small>
                        </div>
                    </div>
                    <a href="{{ url('/perencanaan-tanam') }}" class="btn btn-outline-success btn-sm mt-auto">Detail Rencana <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        {{-- Card Ringkasan Panen Mendatang --}}
        <div class="col-md-6 col-lg-4 mb-4 animate__animated animate__flipInX animate__delay-0-2s">
            <div class="card shadow-sm h-100 bg-light-orange border-warning">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title text-warning mb-3"><i class="fas fa-calendar-check me-2"></i> Panen Berikutnya</h5>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-calendar-day fa-3x text-warning opacity-75 me-3"></i>
                        <div>
                            <p class="card-text mb-0 fs-5 text-dark"><strong>Jagung</strong></p>
                            <small class="text-muted">Perkiraan: <strong class="text-warning">20 Agustus 2025</strong></small>
                        </div>
                    </div>
                    <a href="{{ url('/perencanaan-tanam') }}" class="btn btn-outline-warning btn-sm mt-auto">Lihat Jadwal <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        {{-- Card Ringkasan Biaya Input --}}
        <div class="col-md-6 col-lg-4 mb-4 animate__animated animate__flipInX animate__delay-0-4s">
            <div class="card shadow-sm h-100 bg-light-red border-danger">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title text-danger mb-3"><i class="fas fa-money-bill-transfer me-2"></i> Total Biaya Input</h5>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-coins fa-3x text-danger opacity-75 me-3"></i>
                        <div>
                            <p class="card-text mb-0 fs-5 text-dark">Bulan Ini: <strong class="text-danger">Rp 250.000</strong></p>
                            <small class="text-muted">Untuk pupuk & pestisida</small>
                        </div>
                    </div>
                    <a href="{{ url('/pencatatan-input') }}" class="btn btn-outline-danger btn-sm mt-auto">Detail Biaya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- Bagian Akses Cepat ke Fitur Utama --}}
    <div class="row justify-content-center">
        <div class="col-12 text-center mb-4">
            <h3 class="text-primary animate__animated animate__fadeInLeft">
                <i class="fas fa-cogs me-2"></i> Akses Cepat Fitur Lainnya
            </h3>
            <p class="text-muted animate__animated animate__fadeInRight">Navigasi mudah ke modul penting FarmEase.</p>
        </div>

        {{-- Card untuk Informasi Cuaca Lokal --}}
        <div class="col-md-6 col-lg-4 mb-4 animate__animated animate__zoomIn animate__delay-0-6s">
            <div class="card shadow-sm feature-card">
                <div class="card-body text-center">
                    <i class="fas fa-cloud-sun fa-4x text-info mb-3"></i>
                    <h5 class="card-title">Informasi Cuaca Lokal</h5>
                    <p class="card-text">Pantau kondisi iklim dan prakiraan curah hujan di wilayah Kupang.</p>
                    <a href="{{ url('/cuaca-lokal') }}" class="btn btn-farm mt-auto">Lihat Cuaca <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        {{-- Card untuk Akses Harga Pasar --}}
        <div class="col-md-6 col-lg-4 mb-4 animate__animated animate__zoomIn animate__delay-0-8s">
            <div class="card shadow-sm feature-card">
                <div class="card-body text-center">
                    <i class="fas fa-money-bill-wave fa-4x text-success mb-3"></i>
                    <h5 class="card-title">Akses Harga Pasar Komoditas</h5>
                    <p class="card-text">Dapatkan informasi harga terbaru untuk komoditas pertanian di pasar lokal Anda.</p>
                    <a href="{{ url('/harga-pasar') }}" class="btn btn-farm mt-auto">Lihat Harga <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

     

    </div>
</div>
@endsection