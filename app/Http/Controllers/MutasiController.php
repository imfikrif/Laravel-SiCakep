<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\Models\PendudukLahir;
use App\Models\PendudukMeninggal;
use App\Models\PendudukPindah;

Use Alert;

class MutasiController extends Controller
{
    public function penduduk_lahir(){
        $breadcumb['main']  = 'Penduduk Lahir';
        $breadcumb['sub']  = 'Penduduk Lahir';

        return view('penduduk-lahir.index', $breadcumb);
    }
    
    public function penduduk_datang(){
        $breadcumb['main']  = 'Penduduk Datang';
        $breadcumb['sub']  = 'Penduduk Datang';

        return view('penduduk-lahir.index', $breadcumb);
    }
    
    public function penduduk_meninggal(){
        $breadcumb['main']  = 'Penduduk Meninggal';
        $breadcumb['sub']  = 'Penduduk Meninggal';

        return view('penduduk-lahir.index', $breadcumb);
    }
}
