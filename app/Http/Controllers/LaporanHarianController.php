<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanHarianController extends Controller
{
    public function index()
    {
        return view('laporan-harian.index');
    }
}
