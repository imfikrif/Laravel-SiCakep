<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendudukPindah extends Model
{
    public $table = 'penduduk_pindah';

    protected $fillable = [
        'nik',
        'tanggal_pindah',
        'alasan_pindah',
    ];
}
