@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0"><i class="fas fa-money-bill-wave"></i> Akses Data Harga Pasar Komoditas Utama</h4>
                </div>
                <div class="card-body">
                    <div class="alert alert-info" role="alert">
                        <i class="fas fa-info-circle"></i> Data harga pasar di sini adalah simulasi untuk demonstrasi. Versi produksi akan terintegrasi dengan data real-time jika memungkinkan.
                    </div>

                    <h5 class="mb-3"><i class="fas fa-search-dollar"></i> Harga Komoditas di Pasar Lokal Kupang (Simulasi)</h5>
                    <p class="text-muted">Update terakhir: 27 Juli 2025</p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mt-3">
                            <thead class="table-success">
                                <tr>
                                    <th>No.</th>
                                    <th>Komoditas</th>
                                    <th>Harga (Rp/Kg)</th>
                                    <th>Lokasi Pasar</th>
                                    <th>Tgl Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jagung Pipilan Kering</td>
                                    <td>5.000</td>
                                    <td>Pasar Oebobo</td>
                                    <td>2025-07-27</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ubi Jalar</td>
                                    <td>3.500</td>
                                    <td>Pasar Kasih</td>
                                    <td>2025-07-27</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Bawang Merah</td>
                                    <td>28.000</td>
                                    <td>Pasar Kuanino</td>
                                    <td>2025-07-26</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Cabai Rawit</td>
                                    <td>35.000</td>
                                    <td>Pasar Oebobo</td>
                                    <td>2025-07-27</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Beras Lokal</td>
                                    <td>12.500</td>
                                    <td>Pasar Kasih</td>
                                    <td>2025-07-26</td>
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