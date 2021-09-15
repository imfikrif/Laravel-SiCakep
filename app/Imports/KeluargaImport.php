<?php

namespace App\Imports;

use App\Models\Keluarga;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KeluargaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Keluarga([
            'nomor'             => $row[0],
            'kepala_keluarga'   => $row[1],
        ]);
    }
}
