<?php

use App\Models\Absensi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\NilaiControlller;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\User\DosenController;
use App\Http\Controllers\AbsensiDosenController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\MahasiswaController;
use App\Http\Controllers\PengumpulanTugasController;
use App\Http\Controllers\TugasDosenController;

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
    return view('welcome');
});

Route::get('/registrasi', [RegistrasiController::class, 'index']);
Route::post('/registrasi', [RegistrasiController::class, 'store']);

Auth::routes();

// Admin
Route::middleware(['auth:admin'])->group( function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('admin')->group( function () {
        // CRUD USER
        Route::controller(UserController::class)->group( function () {
            // MAHASISWA
            Route::get('/mahasiswa', 'index_mahasiswa')->name('admin.mahasiswa');
            Route::get('/mahasiswa/{mahasiswa:nim}', 'show_mahasiswa')->name('admin.show.mahasiswa');
            Route::patch('/mahasiswa/{mahasiswa:nim}', 'update_mahasiswa')->name('admin.update.mahasiswa');
            Route::delete('/mahahsiswa/{mahasiswa:nim}', 'delete_mahasiswa')->name('admin.delete.mahasiswa');
            // END MAHASISWA

            // DOSEN
            Route::get('/dosen', 'index_dosen')->name('admin.dosen');
            Route::get('/dosen/{dosen:nip}', 'show_dosen')->name('admin.show.dosen');
            Route::patch('/dosen/{dosen:nip}', 'update_dosen')->name('admin.update.dosen');
            Route::delete('/dosen/{dosen:nip}', 'delete_dosen')->name('admin.delete.dosen');
            // END DOSEN
        });

        // Registrasi
        Route::get('/registrasi', [RegistrasiController::class, 'index_data'])->name('admin.data.mahasiswa');
        Route::get('/registrasi/{data_mahasiswa}', [RegistrasiController::class, 'show_data'])->name('admin.data.show');
        Route::post('/registrasi/cek/{data_mahasiswa}', [RegistrasiController::class, 'chek_data'])->name('admin.data.cek');
    
        // Absensi
        Route::prefix('absensi')->group( function(){
            Route::get('/', [AbsensiController::class, 'index']);
            Route::get('/cek/{matkul}/{jadwal}', [AbsensiController::class, 'cek']);
            Route::post('/store', [AbsensiController::class, 'store'])->name('absensi.store');
            Route::get('/{matkul}', [AbsensiController::class, 'show']);
        });

        // Tugas
        Route::get('/tugas/create/{matkul}', [TugasController::class, 'create']);
        Route::get('/tugas/matkul/{matkul}', [TugasController::class, 'show_matkul']);
        Route::post('/tugas/store', [TugasController::class, 'store']);
        Route::resource('/tugas', TugasController::class);
        // END tugas

        // Nilai
        Route::prefix('nilai')->group(function (){
            Route::get('/', [NilaiControlller::class, 'index']);
            Route::get('/{nilai}', [NilaiControlller::class, 'show']);
            Route::post('/store', [NilaiControlller::class, 'store']);
            Route::get('/create/{matkul}', [NilaiControlller::class, 'create']);
            Route::get('/matkul/{matkul}', [NilaiControlller::class, 'matkul']);
            Route::post('/update/{nilai}', [NilaiControlller::class, 'update']);
        });
        // End Nilai

        // CRUD
        Route::resource('/matkul', MatkulController::class);
        Route::resource('/jadwal', JadwalController::class);
        Route::resource('/jurusan', JurusanController::class);
        // END CRUD
    });
});

// Dosen
Route::middleware('auth:dosen')->group( function () {
    Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
    Route::prefix('dosen')->group(function (){
        // Absensi
        Route::controller(AbsensiDosenController::class)->group( function(){
            Route::get('/absensi', 'index');
            Route::get('/absensi/cek/{jadwal}', 'show');
            Route::post('/absensi/store', 'store');
        });

        // Tugas
        Route::controller(TugasDosenController::class)->group( function () {
            Route::get('/tugas', 'index');
            Route::get('/tugas/{tugas}', 'show');
            Route::get('/tugass/create', 'create');
            Route::post('/tugas/store', 'store');
        });
        

        
        // Nilai
        Route::prefix('nilai')->group(function (){
            Route::get('/', [NilaiControlller::class, 'index_dosen']);
            Route::get('/{nilai}', [NilaiControlller::class, 'show_dosen']);
            Route::post('/store', [NilaiControlller::class, 'store_dosen']);
            Route::get('/create/{matkul}', [NilaiControlller::class, 'create_dosen']);
            Route::get('/matkul/{matkul}', [NilaiControlller::class, 'matkul_dosen']);
            Route::post('/update/{nilai}', [NilaiControlller::class, 'update_dosen']);
        });
    });
    // End Nilai
});

// Mahasiswa
Route::middleware('auth:mahasiswa')->group( function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::prefix('mahasiswa')->group( function () {
        Route::get('/nilai', [NilaiControlller::class, 'index_mahasiswa']);
        Route::get('/tugas/matkul/{matkul}', [TugasController::class, 'show_matkul_tugas_mahasiswa']);
        Route::get('/tugas/{tugas}', [PengumpulanTugasController::class, 'index']);
        Route::post('/pengumpulan-tugas/{tugas:id}', [PengumpulanTugasController::class, 'store']);
        // krs
        Route::get('/krs', [MahasiswaController::class, 'krs_index']);
        Route::post('/krs/store', [KrsController::class, 'store']);
    });

});