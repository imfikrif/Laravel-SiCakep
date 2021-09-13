<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendudukLahir extends Model
{
    public $table = 'penduduk_lahir';

    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'keluarga',
    ];
}
