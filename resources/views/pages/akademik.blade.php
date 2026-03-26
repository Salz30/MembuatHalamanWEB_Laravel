@extends('layouts.main')

@section('content')
<div class="bg-gradient-primary py-5 mb-5 shadow-sm">
    <div class="container text-center text-white">
        <h1 class="display-5 fw-bold mb-3">Layanan Akademik & Karir</h1>
        <p class="lead mb-0">Informasi dan panduan untuk mendukung kesuksesan belajar di SMPN 4 Rancaekek.</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm hover-lift rounded-4 bg-white">
                <div class="card-body p-4">
                    <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center mb-3 shadow-sm" style="width: 60px; height: 60px;">
                        <i class="fs-3">📚</i>
                    </div>
                    <h5 class="fw-bold">Tips Sukses Belajar</h5>
                    <p class="text-muted small">Panduan mengatur waktu belajar yang efektif, teknik mencatat, dan persiapan menghadapi ujian akhir semester.</p>
                    <a href="#" class="text-danger text-decoration-none fw-semibold">Baca Panduan &rarr;</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm hover-lift rounded-4 bg-white">
                <div class="card-body p-4">
                    <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center mb-3 shadow-sm" style="width: 60px; height: 60px;">
                        <i class="fs-3">🎯</i>
                    </div>
                    <h5 class="fw-bold">Peminatan Karir</h5>
                    <p class="text-muted small">Eksplorasi minat dan bakat untuk membantu Anda memilih jurusan di tingkat SMA/SMK yang tepat.</p>
                    <a href="#" class="text-warning text-decoration-none fw-semibold">Mulai Tes Minat &rarr;</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm hover-lift rounded-4 bg-white">
                <div class="card-body p-4">
                    <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center mb-3 shadow-sm" style="width: 60px; height: 60px;">
                        <i class="fs-3">🎓</i>
                    </div>
                    <h5 class="fw-bold">Info Kelanjutan Studi</h5>
                    <p class="text-muted small">Informasi pendaftaran sekolah lanjutan, beasiswa, dan jalur prestasi akademik maupun non-akademik.</p>
                    <a href="#" class="text-success text-decoration-none fw-semibold">Lihat Informasi &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h3 class="fw-bold text-center mb-4">Pertanyaan Seputar Akademik</h3>
            <div class="accordion shadow-sm rounded-4 overflow-hidden" id="accordionAkademik">
                
                <div class="accordion-item border-0 border-bottom">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Bagaimana cara mengatasi rasa malas belajar?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionAkademik">
                        <div class="accordion-body text-muted">
                            Cobalah teknik Pomodoro (belajar 25 menit, istirahat 5 menit), temukan gaya belajar yang sesuai (visual, auditori, atau kinestetik), dan jangan ragu untuk berdiskusi dengan konselor melalui Sikonsel.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0 border-bottom">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Apakah nilai ekstrakurikuler penting untuk mendaftar SMA/SMK?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionAkademik">
                        <div class="accordion-body text-muted">
                            Sangat penting! Terutama jika Anda berencana masuk melalui jalur prestasi non-akademik. Pastikan sertifikat kejuaraan Anda disiapkan dengan baik.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection