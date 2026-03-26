@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="p-4 mb-4 bg-light rounded-3 shadow-sm">
        <div class="container-fluid py-3">
            <h1 class="display-6 fw-bold text-danger mb-3">Daftar Layanan Kami</h1>
            <p class="text-muted fs-5">Berikut adalah jenis-jenis layanan Bimbingan dan Konseling yang kami berikan.</p>
        </div>
    </div>

    <div class="row g-3 mb-5">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                        1
                    </div>
                    <div>
                        <h5 class="card-title fw-bold mb-1">Layanan Orientasi</h5>
                        <p class="card-text text-muted mb-0">Mengenalkan siswa baru pada lingkungan sekolah, staf, dan kegiatan pembelajaran.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                        2
                    </div>
                    <div>
                        <h5 class="card-title fw-bold mb-1">Layanan Informasi</h5>
                        <p class="card-text text-muted mb-0">Memberikan berbagai informasi yang dibutuhkan siswa untuk perkembangan dirinya (karir, belajar, sosial).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                        3
                    </div>
                    <div>
                        <h5 class="card-title fw-bold mb-1">Layanan Penempatan dan Penyaluran</h5>
                        <p class="card-text text-muted mb-0">Membantu siswa mendapatkan penempatan kelas, jurusan, atau kegiatan ekstrakurikuler yang sesuai.</p>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
</div>
@endsection