<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\Models\PendudukMeninggal;
use App\Models\Penduduk;

Use Alert;

class PendudukMeninggalController extends Controller
{
    public function index()
    {
        $breadcumb['main']  = "Penduduk Meninggal";
        $breadcumb['sub']   = "Penduduk Meninggal";
        
        return view('penduduk-meninggal.index', $breadcumb);
    }
    
    public function datatable()
    {
        $data   = PendudukMeninggal::select('penduduk_meninggal.id as id', 'penduduk.nik as nik', 'penduduk.nama as nama', 'penduduk_meninggal.tanggal_wafat as tanggal_wafat', 'penduduk_meninggal.pelapor as pelapor', 'penduduk_meninggal.penyebab as penyebab')
        ->join('penduduk', 'penduduk.nik', 'penduduk_meninggal.nik')
        ->get();
        
        return Datatables::of($data)
        ->addIndexColumn()
        ->AddColumn('button', function($row) {
            $html = '<button class="btn btn-sm btn-primary edit-data" data-id="'.$row->id.'">
                <i class="fa fa-edit"></i>
            </button>
            <button class="btn btn-sm btn-danger delete-data" data-id="'.$row->id.'">
                <i class="fa fa-trash"></i>
            </button>';
            return $html;
        })
        ->rawColumns(['button'])
        ->make(true);
    }

    public function tambah_data()
    {
        $nik    = Penduduk::select('nik', 'nama')->get();

        $breadcumb['main']  = "Penduduk Meninggal";
        $breadcumb['sub']   = "Tambah-data";
        
        return view('penduduk-meninggal.create', $breadcumb)->with(['nik' => $nik]);
    }

    public function create(Request $request)
    {
        $create     = PendudukMeninggal::create([
            'nik'               => $request->nik,
            'tanggal_wafat'     => $request->tanggal_wafat,
            'penyebab'          => $request->penyebab,
            'pelapor'           => $request->pelapor,
        ]);

        Alert::success('Berhasil', 'Penduduk Meninggal berhasil ditambahkan');
        return redirect('penduduk-meninggal');
    }

    public function update(Request $request)
    {
        $update     = PendudukMeninggal::where('id', '=', $request->id)
        ->update([
            'nik'               => $request->nik,
            'tanggal_wafat'     => $request->tanggal_wafat,
            'penyebab'          => $request->penyebab,
            'pelapor'           => $request->pelapor,
        ]);

        Alert::success('Berhasil', 'Data Penduduk Meninggal berhasil diperbarui');
        return redirect('penduduk-meninggal');
    }

    public function edit_data($id)
    {
        $cari_data   = PendudukMeninggal::select('penduduk_meninggal.id as id', 'penduduk.nik as nik', 'penduduk.nama as nama', 'penduduk_meninggal.tanggal_wafat as tanggal_wafat', 'penduduk_meninggal.pelapor as pelapor', 'penduduk_meninggal.penyebab as penyebab')
        ->join('penduduk', 'penduduk.nik', 'penduduk_meninggal.nik')
        ->where('penduduk_meninggal.id', '=', $id)
        ->first();
        
        $breadcumb['main']  = "Penduduk Meninggal";
        $breadcumb['sub']   = "Ubah-data";

        return view('penduduk-meninggal.edit', $breadcumb)->with(['data' => $cari_data]);
    }

    public function delete(Request $request)
    {
        $id     = $request->id;
        $data   = PendudukMeninggal::where('id', '=', $id)->delete();
    }
}
