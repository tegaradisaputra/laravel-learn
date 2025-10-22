<?php

use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::get('/Siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');


