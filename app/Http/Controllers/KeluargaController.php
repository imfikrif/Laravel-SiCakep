<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\Models\Keluarga;
use App\Models\Penduduk;

Use Alert;

class KeluargaController extends Controller
{
    public function index()
    {
        return view('keluarga.index');
    }
    
    public function datatable()
    {
        $data   = Keluarga::all();
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
        ->editColumn('created_at', function ($data) {
            return date('d-m-Y', strtotime($data->created_at));
        })
        ->rawColumns(['button'])
        ->make(true);
    }

    public function tambah_data()
    {
        $nik    = Penduduk::select('nik', 'nama')->get();
        
        return view('keluarga.create')->with(['nik' => $nik]);
    }

    public function create(Request $request)
    {
        $create     = Keluarga::create([
            'nomor'             => $request->nomor,
            'kepala_keluarga'   => $request->kepala_keluarga,
        ]);

        Alert::success('Berhasil', 'Penduduk berhasil ditambahkan');
        return redirect('keluarga');
    }

    public function update(Request $request)
    {
        $update     = Keluarga::where('id', '=', $request->id)
        ->update([
            'nomor'             => $request->nomor,
            'kepala_keluarga'   => $request->kepala_keluarga,
        ]);

        Alert::success('Berhasil', 'Data keluarga berhasil diperbarui');
        return redirect('keluarga');
    }

    public function edit_data($id)
    {
        $cari_data  = Keluarga::where('id', '=', $id)->first();

        return view('keluarga.edit')->with(['data' => $cari_data]);
    }

    public function delete(Request $request)
    {
        $id     = $request->id;
        $data   = Keluarga::where('id', '=', $id)->delete();
    }
}
