<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{

    public function posting()
    {
        return view('dashboard.transaksi.posting', [
        ]);
    }

    public function icmonitor()
    {
        return view('Dashboard.Berita.inputBerita', []);
    }
    public function saldoawal()
    {
        return view('Dashboard.Berita.inputBerita', []);
    }
    public function jurnalumum()
    {
        return view('Dashboard.Berita.inputBerita', []);
    }

}
