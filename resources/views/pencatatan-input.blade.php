@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0"><i class="fas fa-tractor"></i> Pencatatan Input Pertanian & Biaya</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="jenisInput" class="form-label">Jenis Input</label>
                            <select class="form-select" id="jenisInput">
                                <option selected disabled>Pilih Jenis Input</option>
                                <option value="pupuk">Pupuk</option>
                                <option value="pestisida">Pestisida</option>
                                <option value="benih">Benih/Bibit</option>
                                <option value="tenaga_kerja">Tenaga Kerja</option>
                                <option value="lain_lain">Lain-lain</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="namaProduk" class="form-label">Nama Produk/Deskripsi</label>
                            <input type="text" class="form-control" id="namaProduk" placeholder="Cth: Urea, Pestisida Merek A, Biaya Bajak Lahan">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input type="number" step="0.01" class="form-control" id="jumlah" placeholder="Cth: 50">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <input type="text" class="form-control" id="satuan" placeholder="Cth: Kg, Liter, Hari, Orang">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalInput" class="form-label">Tanggal Penggunaan</label>
                            <input type="date" class="form-control" id="tanggalInput">
                        </div>
                        <div class="mb-3">
                            <label for="biayaInput" class="form-label">Biaya (Rp)</label>
                            <input type="number" class="form-control" id="biayaInput" placeholder="Cth: 250000">
                        </div>
                        <div class="mb-3">
                            <label for="catatanInput" class="form-label">Catatan (Opsional)</label>
                            <textarea class="form-control" id="catatanInput" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-farm"><i class="fas fa-save"></i> Simpan Catatan</button>
                    </form>

                    <hr class="my-4">

                    <h5><i class="fas fa-history"></i> Riwayat Pencatatan Input (Simulasi)</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mt-3">
                            <thead class="table-success">
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis</th>
                                    <th>Produk/Deskripsi</th>
                                    <th>Jumlah</th>
                                    <th>Tgl. Pakai</th>
                                    <th>Biaya (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pupuk</td>
                                    <td>Urea</td>
                                    <td>50 Kg</td>
                                    <td>2025-07-12</td>
                                    <td>250.000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Pestisida</td>
                                    <td>Roundup</td>
                                    <td>1 Liter</td>
                                    <td>2025-07-15</td>
                                    <td>75.000</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tenaga Kerja</td>
                                    <td>Penyiangan</td>
                                    <td>2 Orang</td>
                                    <td>2025-07-18</td>
                                    <td>100.000</td>
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