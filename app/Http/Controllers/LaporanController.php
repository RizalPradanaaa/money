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
    public function penghasilankomprehensif()
    {
        return view('dashboard.laporan.utama.penghasilankomprehensif', []);
    }
    public function perubahanassetnetto()
    {
        return view('dashboard.laporan.utama.perubahanassetnetto', []);
    }
    public function posisikeuangan()
    {
        return view('dashboard.laporan.utama.posisikeuangan', []);
    }
    public function statusanggaranproyek()
    {
        return view('dashboard.laporan.proyek.statusanggaranproyek', []);
    }
    public function statusanggaranproyek_month()
    {
        return view('dashboard.laporan.proyek.statusanggaranproyek_month', []);
    }
    public function suf()
    {
        return view('dashboard.laporan.proyek.suf', []);
    }

}
