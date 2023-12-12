<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\transaksi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;

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
