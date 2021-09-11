<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\JadwalPiket;

Use Alert;

class JadwalPiketController extends Controller
{
    public function index()
    {
        // dd($this->route);
        return view('jadwal-piket.index');
    }

    public function create(Request $request)
    {
        $nik        = $request->nik;
        $nama       = $request->nama;
        $tanggal    = $request->tanggal;
        $posisi     = $request->posisi;

        $create     = JadwalPiket::create([
            'nik'       => $nik,
            'nama'      => $nama,
            'tanggal'   => $tanggal,
            'posisi'    => $posisi
        ]);

        Alert::success('Berhasil', 'Data baru berhasil ditambahkan');
        return redirect('jadwal-piket');
    }

    public function delete(Request $request)
    {
        $id     = $request->id;
        $data   = JadwalPiket::where('id', '=', $id)->delete();
    }

    public function tambah_data()
    {
        return view('jadwal-piket.create');
    }

    public function datatable()
    {
        $data   = JadwalPiket::all();
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
