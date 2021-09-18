<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\Models\PendudukPindah;
use App\Models\Penduduk;

Use Alert;

class PendudukPindahController extends Controller
{
    public function index()
    {
        $breadcumb['main']  = "Penduduk Pindah";
        $breadcumb['sub']   = "Penduduk Pindah";
        
        return view('penduduk-pindah.index', $breadcumb);
    }
    
    public function datatable()
    {
        $data   = PendudukPindah::select('penduduk_pindah.id as id', 'penduduk.nik as nik', 'penduduk.nama as nama', 'penduduk_pindah.tanggal_pindah as tanggal_pindah', 'penduduk_pindah.alasan_pindah as alasan_pindah')
        ->join('penduduk', 'penduduk.nik', 'penduduk_pindah.nik')
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

        $breadcumb['main']  = "Penduduk Pindah";
        $breadcumb['sub']   = "Tambah-data";
        
        return view('penduduk-pindah.create', $breadcumb)->with(['nik' => $nik]);
    }

    public function create(Request $request)
    {
        $create     = PendudukPindah::create([
            'nik'               => $request->nik,
            'tanggal_pindah'    => $request->tanggal_pindah,
            'alasan_pindah'     => $request->alasan_pindah,
        ]);

        Alert::success('Berhasil', 'Penduduk Pindah berhasil ditambahkan');
        return redirect('penduduk-pindah');
    }

    public function update(Request $request)
    {
        $update     = PendudukPindah::where('id', '=', $request->id)
        ->update([
            'nik'               => $request->nik,
            'tanggal_pindah'    => $request->tanggal_pindah,
            'alasan_pindah'     => $request->alasan_pindah,
        ]);

        Alert::success('Berhasil', 'Data Penduduk Pindah berhasil diperbarui');
        return redirect('penduduk-pindah');
    }

    public function edit_data($id)
    {
        $cari_data   = PendudukPindah::select('penduduk_pindah.id as id', 'penduduk.nik as nik', 'penduduk.nama as nama', 'penduduk_pindah.tanggal_pindah as tanggal_pindah', 'penduduk_pindah.alasan_pindah as alasan_pindah')
        ->join('penduduk', 'penduduk.nik', 'penduduk_pindah.nik')
        ->where('penduduk_pindah.id', '=', $id)
        ->first();
        
        $breadcumb['main']  = "Penduduk Pindah";
        $breadcumb['sub']   = "Ubah-data";

        return view('penduduk-pindah.edit', $breadcumb)->with(['data' => $cari_data]);
    }

    public function delete(Request $request)
    {
        $id     = $request->id;
        $data   = PendudukPindah::where('id', '=', $id)->delete();
    }
}
