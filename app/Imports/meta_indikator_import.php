<?php

namespace App\Imports;

use App\Models\meta_indikator;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Auth;

class meta_indikator_import implements ToCollection, WithStartRow
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
            meta_indikator::Updateorcreate([
                'ind_b1k2' => $row[0],
                'ind_b1k3' => $row[1],
                'ind_b1k4' => $row[2],
                'ind_b1k5' => $row[3],
                'ind_b1k6' => $row[4],
                'ind_b1k7' => $row[5],
                'ind_b1k8' => $row[6],
                'ind_b1k9' => $row[7],
                'ind_b1k10' => $row[8],
                'ind_b1k11' => $row[9],
                'ind_b1k12' => $row[10],
                'ind_b1k13' => $row[11],
                'ind_b1k14' => $row[12],
                'ind_b1k15' => $row[13],
                'ind_b1k16' => $row[14],
                'ind_b1k17' => $row[15],
                'tahun' => $row[16],
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
