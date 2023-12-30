<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggaranController extends Controller
{
    public function program()
    {
        return view('dashboard.anggaran.program', []);
    }
    public function programimplementor()
    {
        return view('dashboard.anggaran.programimplementor', []);
    }
    public function proyek()
    {
        return view('dashboard.anggaran.proyek', []);
    }
    

}
