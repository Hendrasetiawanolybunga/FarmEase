@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0"><i class="fas fa-seedling"></i> Perencanaan Musim Tanam Adaptif</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="namaTanaman" class="form-label">Nama Tanaman</label>
                            <input type="text" class="form-control" id="namaTanaman" placeholder="Cth: Jagung Varietas Bisi-2">
                        </div>
                        <div class="mb-3">
                            <label for="tanggalTanam" class="form-label">Tanggal Tanam</label>
                            <input type="date" class="form-control" id="tanggalTanam">
                        </div>
                        <div class="mb-3">
                            <label for="luasLahan" class="form-label">Luas Lahan (m²)</label>
                            <input type="number" class="form-control" id="luasLahan" placeholder="Cth: 1000">
                        </div>
                        <div class="mb-3">
                            <label for="jenisLahan" class="form-label">Jenis Lahan</label>
                            <select class="form-select" id="jenisLahan">
                                <option selected disabled>Pilih Jenis Lahan</option>
                                <option value="lahan_kering">Lahan Kering</option>
                                <option value="sawah_tadah_hujan">Sawah Tadah Hujan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="catatan" class="form-label">Catatan Tambahan (Opsional)</label>
                            <textarea class="form-control" id="catatan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-farm"><i class="fas fa-save"></i> Simpan Rencana</button>
                    </form>

                    <hr class="my-4">

                    <h5><i class="fas fa-list"></i> Rencana Tanam Anda (Simulasi)</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mt-3">
                            <thead class="table-success">
                                <tr>
                                    <th>No.</th>
                                    <th>Tanaman</th>
                                    <th>Tgl Tanam</th>
                                    <th>Luas (m²)</th>
                                    <th>Jenis Lahan</th>
                                    <th>Perkiraan Panen</th>
                                    <th>Rekomendasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jagung Hibrida</td>
                                    <td>2025-07-10</td>
                                    <td>1500</td>
                                    <td>Lahan Kering</td>
                                    <td>2025-10-20</td>
                                    <td>Pantau curah hujan di awal musim hujan.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ubi Jalar Ungu</td>
                                    <td>2025-06-01</td>
                                    <td>800</td>
                                    <td>Lahan Kering</td>
                                    <td>2025-11-25</td>
                                    <td>Cukup adaptif di musim kemarau.</td>
                                </tr>
                                {{-- Tambahkan baris lain jika perlu --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection