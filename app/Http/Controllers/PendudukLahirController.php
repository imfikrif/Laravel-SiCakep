<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\Models\PendudukLahir;
use App\Models\Keluarga;

Use Alert;

class PendudukLahirController extends Controller
{
    public function index()
    {
        $breadcumb['main']  = "Penduduk Lahir";
        $breadcumb['sub']   = "Penduduk Lahir";
        
        return view('penduduk-lahir.index', $breadcumb);
    }
    
    public function datatable()
    {
        $data   = PendudukLahir::all();
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
        $nik    = Keluarga::select('nomor', 'kepala_keluarga')->get();

        $breadcumb['main']  = "Penduduk Lahir";
        $breadcumb['sub']   = "Tambah-data";
        
        return view('penduduk-lahir.create', $breadcumb)->with(['nik' => $nik]);
    }

    public function create(Request $request)
    {
        $create     = PendudukLahir::create([
            'nama'              => $request->nama,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'no_kk'             => $request->keluarga,
        ]);

        Alert::success('Berhasil', 'Penduduk lahir berhasil ditambahkan');
        return redirect('penduduk-lahir');
    }

    public function update(Request $request)
    {
        $update     = PendudukLahir::where('id', '=', $request->id)
        ->update([
            'nama'              => $request->nama,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'no_kk'             => $request->keluarga,
        ]);

        Alert::success('Berhasil', 'Data penduduk lahir berhasil diperbarui');
        return redirect('penduduk-lahir');
    }

    public function edit_data($id)
    {
        $cari_data  = PendudukLahir::where('id', '=', $id)->first();

        $breadcumb['main']  = "Penduduk Lahir";
        $breadcumb['sub']   = "Ubah-data";

        return view('penduduk-lahir.edit', $breadcumb)->with(['data' => $cari_data]);
    }

    public function delete(Request $request)
    {
        $id     = $request->id;
        $data   = PendudukLahir::where('id', '=', $id)->delete();
    }
}
