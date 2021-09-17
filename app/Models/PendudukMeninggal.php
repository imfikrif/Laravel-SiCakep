<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendudukMeninggal extends Model
{
    public $table = 'penduduk_meninggal';

    protected $fillable = [
        'nik',
        'tanggal_wafat',
        'penyebab',
        'pelapor',
    ];
}
