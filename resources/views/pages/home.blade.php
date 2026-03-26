@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="p-5 mb-4 bg-gradient-primary text-white rounded-4 text-center shadow-sm" data-aos="fade-down">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">Selamat Datang di Portal {{ $judul }}</h1>
            <p class="col-md-8 fs-4 mx-auto">
                Kami siap membantu peserta didik SMPN 4 Rancaekek dalam mencapai perkembangan optimal. Anda sedang berada di halaman <span class="badge bg-light text-danger">{{ $deskripsi }}</span>
            </p>
        </div>
    </div>

    <div id="heroCarousel" class="carousel slide rounded-4 overflow-hidden shadow mb-5" data-bs-ride="carousel" data-aos="zoom-in" data-aos-delay="200">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/gambar 1.jpg') }}" class="d-block w-100" alt="Banner Bimbingan Konseling">
            </div>
        </div>
    </div>

    <div class="my-5">
        <h2 class="text-center fw-bold mb-4" data-aos="fade-up">Layanan Bimbingan Konseling</h2>
        <div class="row g-4 text-center">
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow-sm border-0 hover-lift rounded-4 bg-white">
                    <div class="card-body p-4">
                        <img src="{{ asset('images/individual.png') }}" alt="Individual" class="mb-3" style="width: 80px;">
                        <h5 class="card-title fw-bold">Konseling Individual</h5>
                        <p class="card-text text-muted">Layanan tatap muka untuk membantu mengentaskan masalah siswa.</p>
                        <a href="#" class="btn btn-outline-danger btn-sm rounded-pill px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-sm border-0 hover-lift rounded-4 bg-white">
                    <div class="card-body p-4">
                        <img src="{{ asset('images/kelompok.png') }}" alt="Kelompok" class="mb-3" style="width: 80px;">
                        <h5 class="card-title fw-bold">Konseling Kelompok</h5>
                        <p class="card-text text-muted">Mengatasi masalah bersama memanfaatkan dinamika kelompok.</p>
                        <a href="#" class="btn btn-outline-danger btn-sm rounded-pill px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-sm border-0 hover-lift rounded-4 bg-white">
                    <div class="card-body p-4">
                        <img src="{{ asset('images/orientasi.png') }}" alt="Orientasi" class="mb-3" style="width: 80px;">
                        <h5 class="card-title fw-bold">Layanan Orientasi</h5>
                        <p class="card-text text-muted">Mengenalkan lingkungan sekolah baru kepada siswa.</p>
                        <a href="#" class="btn btn-outline-danger btn-sm rounded-pill px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection