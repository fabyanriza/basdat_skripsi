<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function () {
    // Proses login atau validasi sederhana jika diperlukan

    // Redirect ke dashboard
    return redirect('/dashboard');
})->name('login');
Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/pengajuan-skripsi', function () {
    return view('pengajuan-skripsi');
})->name('pengajuan-skripsi');

Route::get('/status-skripsi', function () {
    return view('status-skripsi');
})->name('status-skripsi');

Route::get('/pengajuan-bimbingan', function () {
    return view('pengajuan-bimbingan');
})->name('pengajuan-bimbingan');

Route::get('/pengajuan-seminar-hasil', function () {
    return view('pengajuan-seminar-hasil');
})->name('pengajuan-seminar-hasil');


Route::get('/pengajuan-seminar-proposal', function () {
    return view('pengajuan-seminar-proposal');
})->name('pengajuan-seminar-proposal');

Route::get('/test', function(){
    return view('test');
});

Route::get('/p', function(){
    return view('p');
});

Route::get('/operator/dashboard-operator', function () {
    return view('operator.dashboard-operator');
})->name('dashboard-operator');

Route::get('/operator/data-mahasiswa/data-mahasiswa', function () {
    return view('operator.data-mahasiswa.data-mahasiswa');
})->name('data-mahasiswa');

Route::get('/operator/data-mahasiswa/pengajuan-judul-skripsi', function () {
    return view('operator.data-mahasiswa.pengajuan-judul-skripsi');
})->name('pengajuan-judul-skripsi');

Route::get('/operator/data-mahasiswa/pengajuan-seminar-proposal', function () {
    return view('operator.data-mahasiswa.pengajuan-seminar-proposal');
})->name('pengajuan-seminar-proposal');

Route::get('/operator/data-mahasiswa/pengajuan-seminar-hasil', function () {
    return view('operator.data-mahasiswa.pengajuan-seminar-hasil');
})->name('pengajuan-seminar-hasil');

Route::get('/operator/verifikasi-pengajuan-skripsi', function () {
    return view('operator.verifikasi-pengajuan-skripsi');
})->name('verifikasi-pengajuan-skripsi');

Route::get('/operator/jadwal-seminar', function () {
    return view('operator.jadwal-seminar');
})->name('jadwal-seminar');

Route::get('/operator/jadwal-bimbingan', function () {
    return view('operator.jadwal-bimbingan');
})->name('jadwal-bimbingan');

Route::get('/operator/evaluasi', function () {
    return view('operator.evaluasi');
})->name('evaluasi');

Route::get('/dosen/dashboard-dosen', function () {
    return view('dosen.dashboard-dosen');
})->name('dashboard-dosen');

Route::get('/dosen/data-mahasiswa', function () {
    return view('dosen.data-mahasiswa');
})->name('data-mahasiswa');

Route::get('/dosen/jadwal-bimbingan', function () {
    return view('dosen.jadwal-bimbingan');
})->name('jadwal-bimbingan');

Route::get('/dosen/monitoring-skripsi-mahasiswa', function () {
    return view('dosen.monitoring-skripsi-mahasiswa');
})->name('monitoring-skripsi-mahasiwa');

Route::get('/dosen/laporan-bimbingan', function () {
    return view('dosen.laporan-bimbingan');
})->name('laporan-bimbingan');

Route::get('/dosen/data-mahasiswa-seminar-proposal', function () {
    return view('dosen.data-mahasiswa-seminar-proposal');
})->name('data-mahasiswa-seminar-proposal');

Route::get('/dosen/persetujuan-pengajuan-seminar-proposal', function () {
    return view('dosen.persetujuan-pengajuan-seminar-proposal');
})->name('persetujuan-pengajuan-seminar-proposal');

Route::get('/dosen/jadwal-seminar-proposal', function () {
    return view('dosen.jadwal-seminar-proposal');
})->name('jadwal-seminar-proposal');
