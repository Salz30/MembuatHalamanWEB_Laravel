@extends('layouts.main')

@section('content')
<div class="bg-gradient-primary py-5 mb-5 shadow-sm">
    <div class="container text-center text-white">
        <h1 class="display-5 fw-bold mb-3">Profil Konselor Kami</h1>
        <p class="lead mb-0">Kenali lebih dekat guru bimbingan dan konseling yang siap mendengarkan dan membantu Anda.</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row g-4 justify-content-center">
        
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm hover-lift rounded-4 overflow-hidden">
                <div class="card-body text-center p-4">
                    <img src="https://ui-avatars.com/api/?name=Bapak+Budi&background=e63946&color=fff&size=120" alt="Guru BK 1" class="rounded-circle mb-3 shadow-sm" style="width: 120px; height: 120px; object-fit: cover border: 4px solid white;">
                    <h5 class="card-title fw-bold">Bapak Budi Santoso, M.Pd.</h5>
                    <p class="text-danger fw-semibold mb-2">Koordinator BK</p>
                    <p class="text-muted small mb-4">Spesialisasi: Konseling Karir & Pengembangan Diri.</p>
                    <a href="#" class="btn btn-outline-danger w-100 rounded-pill">Jadwalkan Sesi</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm hover-lift rounded-4 overflow-hidden">
                <div class="card-body text-center p-4">
                    <img src="https://ui-avatars.com/api/?name=Ibu+Siti&background=f4a261&color=fff&size=120" alt="Guru BK 2" class="rounded-circle mb-3 shadow-sm" style="width: 120px; height: 120px; border: 4px solid white;">
                    <h5 class="card-title fw-bold">Ibu Siti Aminah, S.Psi.</h5>
                    <p class="text-danger fw-semibold mb-2">Konselor Psikologi</p>
                    <p class="text-muted small mb-4">Spesialisasi: Bimbingan Sosial & Manajemen Stres.</p>
                    <a href="#" class="btn btn-outline-danger w-100 rounded-pill">Jadwalkan Sesi</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection