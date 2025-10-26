<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', [AuthController::class, 'showLogin'])->name('auth.login');

Route::get('/auth/register', [AuthController::class, 'showRegister'])->name('auth.register');

Route::post('/auth/login', [AuthController::class, 'login'])->name('login');

Route::post('/auth/register', [AuthController::class, 'register'])->name('register');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');

Route::get('/Siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

Route::get('/siswa/{siswa}', [SiswaController::class, 'show'])->name('siswa.show');

Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
