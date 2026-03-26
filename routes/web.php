<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        
    $judul = "Sistem Informasi Konseling SMP";
    $deskripsi = "Membantu siswa dalam konsultasi akademik dan kesehatan mental.";

    return view('pages.home', compact('judul', 'deskripsi'));
});

Route::get('/layanan', function () {
    return view('pages.layanan');
});

Route::get('/akademik', function () {
    return view('pages.akademik');
});

Route::get('/guru-bk', function () {
    return view('pages.gurubk');
});