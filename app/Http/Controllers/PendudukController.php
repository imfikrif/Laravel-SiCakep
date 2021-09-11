<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\Models\Penduduk;

Use Alert;

class PendudukController extends Controller
{
    public function index()
    {
        return view('penduduk.index');
    }

    public function tambah_data()
    {
        return view('penduduk.create');
    }

    public function create(Request $request)
    {
        $nama       = $request->nama_event;
        $keterangan = $request->keterangan;
        $tanggal    = $request->tanggal;

        $create     = Penduduk::create([
            'nama'          => $nama,
            'keterangan'    => $keterangan,
            'tanggal'       => $tanggal
        ]);

        Alert::success('Berhasil', 'Event baru berhasil ditambahkan');
        return redirect('penduduk');
    }

    public function delete(Request $request)
    {
        $id     = $request->id;
        $data   = Penduduk::where('id', '=', $id)->delete();
    }

    public function datatable()
    {
        $data   = Penduduk::all();
        return Datatables::of($data)
        ->addIndexColumn()
        ->AddColumn('button', function($row) {
            $html = '<button class="btn btn-sm btn-primary">
                <i class="fa fa-edit"></i>
            </button>
            <button class="btn btn-sm btn-danger delete-data" data-id="'.$row->id.'">
                <i class="fa fa-trash"></i>
            </button>';
            return $html;
            }
        )   
        ->rawColumns(['button'])
        ->make(true);
    }
}