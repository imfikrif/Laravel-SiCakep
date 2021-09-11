<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    public $table = 'penduduk';

    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'status_kawin',
        'alamat',
        'pekerjaan',
        'pendidikan',
        'agama',
        'lurah',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'no_kk',
    ];
}
