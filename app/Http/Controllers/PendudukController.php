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
        $breadcumb['main']  = "Penduduk";
        $breadcumb['sub']   = "Penduduk";

        return view('penduduk.index', $breadcumb);
    }

    public function tambah_data()
    {
        $breadcumb['main']  = "Penduduk";
        $breadcumb['sub']   = "Tambah-data";

        return view('penduduk.create', $breadcumb);
    }

    public function create(Request $request)
    {
        $create     = Penduduk::create([
            'nik'           => $request->nik,
            'nama'          => $request->nama,
            'tempat_lahir'  => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status_kawin'  => $request->status_kawin,
            'alamat'        => $request->alamat,
            'pekerjaan'     => $request->pekerjaan,
            'pendidikan'    => $request->pendidikan,
            'agama'         => $request->agama,
            'lurah'         => $request->lurah,
            'kecamatan'     => $request->kecamatan,
            'kabupaten'     => $request->kabupaten,
            'provinsi'      => $request->provinsi,
        ]);

        Alert::success('Berhasil', 'Penduduk berhasil ditambahkan');
        return redirect('penduduk');
    }

    public function update(Request $request)
    {
        $update     = Penduduk::where('id', '=', $request->id)
        ->update([
            'nik'           => $request->nik,
            'nama'          => $request->nama,
            'tempat_lahir'  => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status_kawin'  => $request->status_kawin,
            'alamat'        => $request->alamat,
            'pekerjaan'     => $request->pekerjaan,
            'pendidikan'    => $request->pendidikan,
            'agama'         => $request->agama,
            'lurah'         => $request->lurah,
            'kecamatan'     => $request->kecamatan,
            'kabupaten'     => $request->kabupaten,
            'provinsi'      => $request->provinsi,
        ]);

        Alert::success('Berhasil', 'Penduduk berhasil diperbarui');
        return redirect('penduduk');
    }

    public function edit_data($id)
    {
        $cari_data  = Penduduk::where('id', '=', $id)->first();

        $breadcumb['main']  = "Penduduk";
        $breadcumb['sub']   = "Ubah-data";

        return view('penduduk.edit', $breadcumb)->with(['data' => $cari_data]);
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
            $html = '<button class="btn btn-sm btn-primary edit-data" data-id="'.$row->id.'">
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