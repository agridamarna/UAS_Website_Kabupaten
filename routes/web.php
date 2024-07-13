<?php

use App\Http\Controllers\PengaduanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/pengaduan', [PengaduanController::class, 'index']);
Route::post('/pengaduan/proses_tambah', [PengaduanController::class, 'proses_tambah']);
Route::get('/pengaduan/hapus/{id}', [PengaduanController::class, 'hapus']);
