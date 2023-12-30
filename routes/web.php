<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\transaksi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AnggaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('master')->group(function () {
    Route::get('/rekening', [MasterController::class, 'index']);
});

Route::prefix('transaksi')->group(function () {
    Route::get('/posting', [TransaksiController::class, 'posting']);
    Route::get('/icmonitor', [TransaksiController::class, 'icmonitor']);
    Route::get('/saldoawal', [TransaksiController::class, 'saldoawal']);
    Route::get('/jurnalumum', [TransaksiController::class, 'jurnalumum']);
});

Route::prefix('laporan')->group(function () {
    Route::get('/umum/neracabuku', [LaporanController::class, 'neracabuku']);
    Route::get('/umum/buku', [LaporanController::class, 'buku']);
    Route::get('/umum/jurnal', [LaporanController::class, 'jurnal']);
    Route::get('/umum/monitoring', [LaporanController::class, 'monitoring']);
    Route::get('/utama/posisikeuangan', [LaporanController::class, 'posisikeuangan']);
    Route::get('/utama/penghasilankomprehensif', [LaporanController::class, 'penghasilankomprehensif']);
    Route::get('/utama/perubahanassetnetto', [LaporanController::class, 'perubahanassetnetto']);
    Route::get('/proyek/statusanggaranproyek', [LaporanController::class, 'statusanggaranproyek']);
    Route::get('/proyek/statusanggaranproyek_month', [LaporanController::class, 'statusanggaranproyek_month']);
    Route::get('/proyek/suf', [LaporanController::class, 'suf']);
});

Route::prefix('anggaran')->group(function () {
    Route::get('/program', [AnggaranController::class, 'program']);
    Route::get('/programimplementor', [AnggaranController::class, 'programimplementor']);
    Route::get('/proyek', [AnggaranController::class, 'proyek']);
});