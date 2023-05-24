<?php

use App\Http\Controllers\AngkatanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SumbanganController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (Auth::user() != null) {
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('view.login');
    }
});

Route::middleware('auth')->group(function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    Route::controller(JurusanController::class)->group(function () {
        Route::get('/jurusan', 'index')->name('jurusan');
        Route::Post('/jurusan/create', 'create')->name('jurusan.create');
        Route::get('/jurusan/show/{id}', 'show')->name('jurusan.edit');
        Route::Post('/jurusan/update/{id}', 'update')->name('jurusan.update');
        Route::get('/jurusan/delete/{id}', 'delete')->name('jurusan.delete');
    });

    Route::controller(AngkatanController::class)->group(function () {
        Route::get('/angkatan', 'index')->name('angkatan');
        Route::Post('/angkatan/create', 'create')->name('angkatan.create');
        Route::get('/angkatan/show/{id}', 'show')->name('angkatan.edit');
        Route::Post('/angkatan/update/{id}', 'update')->name('angkatan.update');
        Route::get('/angkatan/delete/{id}', 'delete')->name('angkatan.delete');
    });

    Route::controller(KelasController::class)->group(function () {
        Route::get('/kelas', 'index')->name('kelas');
        Route::Post('/kelas/create', 'create')->name('kelas.create');
        Route::get('/kelas/show/{id}', 'show')->name('kelas.edit');
        Route::Post('/kelas/update/{id}', 'update')->name('kelas.update');
        Route::get('/kelas/delete/{id}', 'delete')->name('kelas.delete');
    });

    Route::controller(SiswaController::class)->group(function () {
        Route::get('/siswa', 'index')->name('siswa');
        Route::Post('/siswa/create', 'create')->name('siswa.create');
        Route::get('/siswa/show/{id}', 'show')->name('siswa.edit');
        Route::get('/siswa/detail/{id}', 'detail')->name('siswa.detail');
        Route::Post('/siswa/update/{id}', 'update')->name('siswa.update');
        Route::get('/siswa/delete/{id}', 'delete')->name('siswa.delete');
    });





    Route::controller(SumbanganController::class)->group(function () {
        Route::get('/sumbangan', 'index')->name('sumbangan');
        Route::Post('/sumbangan/create', 'create')->name('sumbangan.create');
        Route::get('/sumbangan/show/{id}', 'show')->name('sumbangan.edit');
        Route::get('/sumbangan/detail/{id}', 'detail')->name('sumbangan.detail');
        Route::Post('/sumbangan/update/{id}', 'update')->name('sumbangan.update');
        Route::get('/sumbangan/delete/{id}', 'delete')->name('sumbangan.delete');
    });


    // untuk table dana praktek dan lain lain belakangan saja buat masa depan nanti

    // Route::controller(DanaController::class)->group(function () {
    //     Route::get('/dana', 'index')->name('dana');
    // });

    // Route::controller(DanaPraktekController::class)->group(function () {
    //     Route::Post('/praktek/create', 'create')->name('praktek.create');
    //     Route::get('/praktek/show/{id}', 'show')->name('praktek.edit');
    //     Route::Post('/praktek/update/{id}', 'update')->name('praktek.update');
    //     Route::get('/praktek/delete/{id}', 'delete')->name('praktek.delete');
    // });

    // Route::controller(DanaPembangunanController::class)->group(function () {
    //     Route::Post('/pembangunan/create', 'create')->name('pembangunan.create');
    //     Route::get('/pembangunan/show/{id}', 'show')->name('pembangunan.edit');
    //     Route::Post('/pembangunan/update/{id}', 'update')->name('pembangunan.update');
    //     Route::get('/pembangunan/delete/{id}', 'delete')->name('pembangunan.delete');
    // });


    Route::controller(PembayaranController::class)->group(function () {
        Route::get('/pembayaran', 'index')->name('pembayaran');
        Route::Post('/pembayaran/create', 'create')->name('pembayaran.create');
        Route::get('/pembayaran/show/{id}', 'show')->name('pembayaran.edit');
        Route::get('/pembayaran/print/{id}', 'print')->name('pembayaran.print');
        Route::get('/pembayaran/detail/{id}', 'detail')->name('pembayaran.detail');
        Route::Post('/pembayaran/update/{id}', 'update')->name('pembayaran.update');
        Route::get('/pembayaran/delete/{id}', 'delete')->name('pembayaran.delete');

        // Route::get('/lunas', 'index')->name('lunas');
        // // Route::Post('/lunas/create', 'create')->name('lunas.create');
        // // Route::get('/lunas/show/{id}', 'show')->name('lunas.edit');
        // // Route::Post('/lunas/update/{id}', 'update')->name('lunas.update');
        // // Route::get('/lunas/delete/{id}', 'delete')->name('lunas.delete');
    });


    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user');
        Route::Post('/user/create', 'create')->name('user.create');
        Route::get('/user/show/{id}', 'show')->name('user.edit');
        Route::get('/user/detail/{id}', 'detail')->name('user.detail');
        Route::Post('/user/update/{id}', 'update')->name('user.update');
        Route::get('/user/delete/{id}', 'delete')->name('user.delete');
    });
});



Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('view.login');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});
