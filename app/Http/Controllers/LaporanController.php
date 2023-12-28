<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function neracabuku()
    {
        return view('dashboard.laporan.umum.neracabuku', []);
    }
    public function buku()
    {
        return view('dashboard.laporan.umum.buku', []);
    }
    public function jurnal()
    {
        return view('dashboard.laporan.umum.jurnal', []);
    }
    public function monitoring()
    {
        return view('dashboard.laporan.umum.monitoring', []);
    }

}
