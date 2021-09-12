<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    public $table = 'keluarga';

    protected $fillable = [
        'nomor',
        'kepala_keluarga',
    ];
}
