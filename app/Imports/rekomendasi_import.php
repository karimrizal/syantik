<?php

namespace App\Imports;

use App\Models\rekomendasi;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Auth;

class rekomendasi_import implements WithMappedCells, ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

/*     public function sheets(): array 
    {
        return[
            0 => new FirstSheetImport()
        ];
    } */
    
    private $year, $year2, $year3;

    public function setYear(string $year)
    {
        $this->year = $year;
    }
    
    public function setYear2(string $year2)
    {
        $this->year2 = $year2;
    }
    
    public function setYear3(string $year3)
    {
        $this->year3 = $year3;
    }

    public function mapping(): array
    {
        return[
            'b1r1' => 'C5',
            'b1r2' => 'C6',
            'b1r3a' => 'C7',
            'b1r3b' => 'C8',
            'b1r3c' => 'C9',

            'b2r1a' => 'C11',
            'b2r1b' => 'C12',
            'b2r1c' => 'C13',
            'b2r1d' => 'C14',
            'b2r1e' => 'C15',
            'b2r2a' => 'C16',
            'b2r2b' => 'C17',
            'b2r2c' => 'C18',
            'b2r2d' => 'C19',
            'b2r2e' => 'C20',
            'b2r2f' => 'C21',
            'b2r3a' => 'C22',
            'b2r3b' => 'C23',

            'b3r1' => 'C25',
            'b3r2' => 'C26',
            'b3r3' => 'C27',

            'b4r1' => 'C29',
            'b4r2' => 'C30',

            'b5r1' => 'C32',
            'b5r2' => 'C33',
            'b5r3' => 'C34',
            'b5r4' => 'C35',
            'b5r5' => 'C36',
            'b5r6a' => 'C37',
            'b5r6b' => 'C38',
            'b5r7' => 'C39',
            'b5r8' => 'C40',
            'b5r9' => 'C41',
            'b5r10' => 'C42',
            'b5r11a' => 'C44',
            'b5r11b' => 'C45',

            'b6r1' => 'C47',
            'b6r2' => 'C48',
            'b6r3' => 'C49',
            'b6r4' => 'C50',
            'b6r5' => 'C51',
            'b6r6' => 'C52',
            'b6r7' => 'C53',
            
            'b7r1a' => 'C56',
            'b7r1b' => 'C57',
            'b7r1c' => 'C58',
            'b7r2' => 'C59',
            'b7r3' => 'C60',
            'b7r4a' => 'C62',
            'b7r4b' => 'C63',
            'b7r4c' => 'C64',
            'b7r4d' => 'C65',
            'b7r4e' => 'C66',
            'b7r5a' => 'C68',
            'b7r5b' => 'C69',
            'b7r5c' => 'C70',
            'b7r5d' => 'C71',
            'b7r5e' => 'C72',
            'b7r6' => 'C73',
           
      
        ];
    }

    public function model(array $row)
    {
        return new rekomendasi([
            'b1r1' => $row['b1r1'],
            'b1r2' => $row['b1r2'],
            'b1r3a' => $row['b1r3a'],
            'b1r3b' => $row['b1r3b'],
            'b1r3c' => $row['b1r3c'],

            'b2r1a' => $row['b2r1a'],
            'b2r1b' => $row['b2r1b'],
            'b2r1c' => $row['b2r1c'],
            'b2r1d' => $row['b2r1d'],
            'b2r1e' => $row['b2r1e'],
            'b2r2a' => $row['b2r2a'],
            'b2r2b' => $row['b2r2b'],
            'b2r2c' => $row['b2r2c'],
            'b2r2d' => $row['b2r2d'],
            'b2r2e' => $row['b2r2e'],
            'b2r2f' => $row['b2r2f'],
            'b2r3a' => $row['b2r3a'],
            'b2r3b' => $row['b2r3b'],


            'b3r1' => $row['b3r1'],
            'b3r2' => $row['b3r2'],
            'b3r3' => $row['b3r3'],


            'b4r1' => $row['b4r1'],
            'b4r2' => $row['b4r2'],

            'b5r1' => $row['b5r1'],
            'b5r2' => $row['b5r2'],
            'b5r3' => $row['b5r3'],
            'b5r4' => $row['b5r4'],
            'b5r5' => $row['b5r5'],
            'b5r6a' => $row['b5r6a'],
            'b5r6b' => $row['b5r6b'],
            'b5r7' => $row['b5r7'],
            'b5r8' => $row['b5r8'],
            'b5r9' => $row['b5r9'],
            'b5r10' => $row['b5r10'],
            'b5r11a' => $row['b5r11a'],
            'b5r11b' => $row['b5r11b'],

            'b6r1' => $row['b6r1'],
            'b6r2' => $row['b6r2'],
            'b6r3' => $row['b6r3'],
            'b6r4' => $row['b6r4'],
            'b6r5' => $row['b6r5'],
            'b6r6' => $row['b6r6'],
            'b6r7' => $row['b6r7'],

            'b7r1a' => $row['b7r1a'],
            'b7r1b' => $row['b7r1b'],
            'b7r1c' => $row['b7r1c'],
            'b7r2' => $row['b7r2'],
            'b7r3' => $row['b7r3'],
            'b7r4a' => $row['b7r4a'],
            'b7r4b' => $row['b7r4b'],
            'b7r4c' => $row['b7r4c'],
            'b7r4d' => $row['b7r4d'],
            'b7r4e' => $row['b7r4e'],
            'b7r5a' => $row['b7r5a'],
            'b7r5b' => $row['b7r5b'],
            'b7r5c' => $row['b7r5c'],
            'b7r5d' => $row['b7r5d'],
            'b7r5e' => $row['b7r5e'],
            'b7r6' => $row['b7r6'],
            
            'organisasi' => Auth::user()->organisasi,
            'idkab' => Auth::user()->idkab,
            'form_fs3' => $this->year,
            'surat_pengantar' => $this->year2,
            'instrumen' => $this->year3,
       
        ]);
    }

    
}
