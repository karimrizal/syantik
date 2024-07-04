<?php

namespace App\Imports;

use App\Models\meta_variabel;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Auth;

class meta_variabel_import implements ToCollection, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            meta_variabel::Updateorcreate([
                'var_b1k2' => $row[0],
                'var_b1k3' => $row[1],
                'var_b1k4' => $row[2],
                'var_b1k5' => $row[3],
                'var_b1k6' => $row[4],
                'var_b1k7' => $row[5],
                'var_b1k8' => $row[6],
                'var_b1k9' => $row[7],
                'var_b1k10' => $row[8],
                'var_b1k11' => $row[9],
                'var_b1k12' => $row[10],
                'tahun' => $row[11],
                'organisasi' => Auth::user()->organisasi,
                'idkab' => Auth::user()->idkab,
                'petugas_upload' => Auth::user()->name,
            ]);
        }
    }

    public function startRow(): int {
        return 7;
    }
}
