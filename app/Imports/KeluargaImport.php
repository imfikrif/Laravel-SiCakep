<?php

namespace App\Imports;

use App\Models\Keluarga;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

class KeluargaImport implements ToModel, WithStartRow
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

    public function startRow(): int
    {
        return 2;
    }
}
