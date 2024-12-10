@extends('layouts.app')

@section('content')
    <div class="container mt-6">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-center mb-4 text-success">Input Emisi Karbon</h2>

                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('emisicarbon.store') }}" method="POST">
                            @csrf

                            <div class="row">
                                <!-- Kode Emisi Karbon -->
                                <div class="col-md-6 mb-3">
                                    <label for="kode_emisi_karbon" class="form-label">Kode Emisi Karbon</label>
                                    <input type="text" class="form-control" id="kode_emisi_karbon" name="kode_emisi_karbon" required placeholder="Masukkan kode emisi karbon">
                                </div>

                                <!-- Kategori Emisi Karbon -->
                                <div class="col-md-6 mb-3">
                                    <label for="kategori_emisi_karbon" class="form-label">Kategori Emisi Karbon</label>
                                    <input type="text" class="form-control" id="kategori_emisi_karbon" name="kategori_emisi_karbon" required placeholder="Masukkan kategori emisi karbon">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Tanggal Emisi -->
                                <div class="col-md-6 mb-3">
                                    <label for="tanggal_emisi" class="form-label">Tanggal Emisi</label>
                                    <input type="date" class="form-control" id="tanggal_emisi" name="tanggal_emisi" required>
                                </div>

                                <!-- Kadar Emisi Karbon -->
                                <div class="col-md-6 mb-3">
                                    <label for="kadar_emisi_karbon" class="form-label">Kadar Emisi Karbon</label>
                                    <input type="number" class="form-control" id="kadar_emisi_karbon" name="kadar_emisi_karbon" required placeholder="Masukkan kadar emisi karbon">
                                </div>
                            </div>

                            <!-- Deskripsi -->
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" required placeholder="Masukkan deskripsi emisi karbon" rows="4"></textarea>
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="" disabled selected>Pilih status</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>

                            <!-- Button Submit -->
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-success btn-lg">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
