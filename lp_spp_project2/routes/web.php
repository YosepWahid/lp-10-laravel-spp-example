<?php

use App\Http\Controllers\AngkatanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SumbanganController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (auth()->user() == null) {
        return to_route('logins');
    } else {
        return to_route('dashboard');
    }
});

Route::middleware('auth')->group(function () {
    // dashboard
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    /* SEKOLAH */
    // jurusan
    Route::controller(JurusanController::class)->group(function () {
        Route::get('/jurusan', 'index')->name('jurusan');
        Route::post('/jurusan/create', 'create')->name('jurusan.post');
        Route::post('/jurusan/update/{id}', 'update')->name('jurusan.update');
        Route::post('/jurusan/delete/{id}', 'update')->name('jurusan.update');
    });

    // angkatan
    Route::controller(AngkatanController::class)->group(function () {
        Route::get('/angkatan', 'index')->name('angkatan');
        Route::post('/angkatan/create', 'create')->name('angkatan.post');
        Route::post('/angkatan/update/{id}', 'update')->name('angkatan.update');
        Route::post('/angkatan/delete/{id}', 'update')->name('angkatan.update');
    });

    // kelas
    Route::controller(KelasController::class)->group(function () {
        Route::get('/kelas', 'index')->name('kelas');
        Route::post('/kelas/create', 'create')->name('kelas.post');
        Route::post('/kelas/update/{id}', 'update')->name('kelas.update');
        Route::post('/kelas/delete/{id}', 'update')->name('kelas.update');
    });

    /* Keungan */
    // sumbangan atau spp
    Route::controller(SumbanganController::class)->group(function () {
        Route::get('/sumbangan', 'index')->name('sumbangan');
        Route::post('/sumbangan/create', 'create')->name('sumbangan.post');
        Route::post('/sumbangan/update/{id}', 'update')->name('sumbangan.update');
        Route::post('/sumbangan/delete/{id}', 'update')->name('sumbangan.update');
    });

    // pembayaran
    Route::controller(PembayaranController::class)->group(function () {
        Route::get('/pembayaran', 'index')->name('pembayaran');
        Route::post('/pembayaran/create', 'create')->name('pembayaran.post');
        Route::post('/pembayaran/update/{id}', 'update')->name('pembayaran.update');
        Route::post('/pembayaran/delete/{id}', 'update')->name('pembayaran.update');
    });

    /* pengguna */
    // user
    Route::controller(UserController::class)->group(function () {
        Route::get('/pengguna   ', 'index')->name('pengguna');
        Route::post('/pengguna/create', 'create')->name('pengguna.post');
        Route::post('/pengguna/update/{id}', 'update')->name('pengguna.update');
        Route::post('/pengguna/delete/{id}', 'update')->name('pengguna.update');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('logins');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});
