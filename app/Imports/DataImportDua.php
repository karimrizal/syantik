<?php

namespace App\Imports;

use App\Models\data;
use App\Models\data_dua;
use App\Models\Kolom;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithStartRow;


class DataImportDua implements ToCollection, SkipsOnFailure, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public $items;
    public function collection(Collection $rows)
    {

        
        foreach ($rows as $row) {

            data::updateOrCreate([

                'desa' => $row[0],
                'tahun' => request('tahun_id'),
                'tabel_id' => request('tabel_id'), 
                'kolom_id' => request('item_id'),
                
            ], [
                
                'data' => $row[1],
                
                 
                
            ]);

            data_dua::updateOrCreate([
                
                'desa' => $row[0],
                'tahun' => request('tahun_id'), 
                'tabel_id' => request('tabel_id'),
                'kolom_id' => request('item_id2'),
            ], [
                
                'data' => $row[2],
                 
                
            ]);
        }
        
     
    }

    public function onFailure(Failure ...$failures)
    {
        // Handle the failures how you'd like.
    }

    public function startRow(): int
    {
        return 3;
    }
}
