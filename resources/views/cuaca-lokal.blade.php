@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0"><i class="fas fa-cloud-sun"></i> Informasi Cuaca & Agroklimat Lokal</h4>
                </div>
                <div class="card-body">
                    <div class="alert alert-info" role="alert">
                        <i class="fas fa-info-circle"></i> Data cuaca di sini adalah simulasi untuk demonstrasi. Versi produksi akan terintegrasi dengan data real-time.
                    </div>

                    <div class="text-center mb-4">
                        <h2>Kondisi Cuaca Saat Ini (Kab. Kupang)</h2>
                        <p class="text-muted">Update terakhir: 27 Juli 2025, 14:00 WITA</p>
                        <i class="fas fa-cloud-sun fa-5x text-warning mb-3"></i>
                        <h3 class="display-4">28°C</h3>
                        <p class="lead">Cerah Berawan, Angin Sejuk</p>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <p class="mb-0"><i class="fas fa-tint"></i> Kelembaban: 75%</p>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0"><i class="fas fa-cloud-showers-heavy"></i> Curah Hujan (24 jam): 0 mm</p>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0"><i class="fas fa-wind"></i> Kecepatan Angin: 10 km/jam</p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h5><i class="fas fa-calendar-alt"></i> Prediksi Cuaca 3 Hari Mendatang (Simulasi)</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mt-3">
                            <thead class="table-success">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Kondisi</th>
                                    <th>Suhu (Min/Max)</th>
                                    <th>Curah Hujan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>28 Juli 2025</td>
                                    <td><i class="fas fa-cloud"></i> Berawan</td>
                                    <td>24°C / 30°C</td>
                                    <td>0-5 mm</td>
                                </tr>
                                <tr>
                                    <td>29 Juli 2025</td>
                                    <td><i class="fas fa-sun"></i> Cerah</td>
                                    <td>23°C / 31°C</td>
                                    <td>0 mm</td>
                                </tr>
                                <tr>
                                    <td>30 Juli 2025</td>
                                    <td><i class="fas fa-cloud-rain"></i> Hujan Ringan</td>
                                    <td>25°C / 29°C</td>
                                    <td>5-10 mm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection