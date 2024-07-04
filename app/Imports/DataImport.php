<?php

namespace App\Imports;

use App\Models\data;
use App\Models\Kolom;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithStartRow;




class DataImport implements ToCollection, SkipsOnFailure, WithStartRow, WithMappedCells
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public $items;

    

    public function mapping(): array
    {
        return [
            'tabel_id'  => 'B1',
            
        ];
    }

    public function collection(Collection $rows)
    {
        
        foreach ($rows as $row) {
            
            data::updateOrCreate([

                'desa' => $row[0],
                
                'tabel_id' => $row['tabel_id'],
                        
            ], [
                
                'data' => $row[1],
                 
            ]);

        }
        
     
    }


            
    


    public function onFailure(Failure ...$failures)
    {
        // Handle the failures how you'd like.
    }

    public function startRow(): int
    {
        return 2;
    }
}
