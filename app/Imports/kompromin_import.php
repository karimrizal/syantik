<?php

namespace App\Imports;

use App\Models\rekomendasi;
use App\Models\kompromin;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Auth;

class kompromin_import implements WithMappedCells, ToModel
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
            'b1r1_k' => 'C5',
            'b1r2_k' => 'C6',
            'b1r3a_k' => 'C7',
            'b1r3b_k' => 'C8',
            'b1r3c_k' => 'C9',

            'b2r1a_k' => 'C11',
            'b2r1b_k' => 'C12',
            'b2r1c_k' => 'C13',
            'b2r1d_k' => 'C14',
            'b2r1e_k' => 'C15',
            'b2r1f_k' => 'C16',
            'b2r2a_k' => 'C17',
            'b2r2b_k' => 'C18',
            'b2r2c_k' => 'C19',
            'b2r2d_k' => 'C20',
            'b2r2e_k' => 'C21',
            'b2r2f_k' => 'C22',
            'b2r3a_k' => 'C23',
            'b2r3b_k' => 'C24',

            'b3r1_k' => 'C26',
            'b3r2a_k' => 'C28',
            'b3r2b_k' => 'C29',
            'b3r2c_k' => 'C30',
            'b3r2d_k' => 'C31',
            'b3r2e_k' => 'C32',

            'b4r1_k' => 'C34',
            'b4r2_k' => 'C35',
            'b4r3_k' => 'C36',

            'b5r1_k' => 'C38',
            'b5r2_k' => 'C39',
            'b5r3_k' => 'C40',
            'b5r4_k' => 'C41',
            'b5r5_k' => 'C42',
            'b5r6_k' => 'C43',
            
            'b6r1_k' => 'C45',
            'b6r2_k' => 'C46',
            'b6r3a_k' => 'C48',
            'b6r3b_k' => 'C49',
            'b6r4_k' => 'C50',
            
            'b7r1a_k' => 'C53',
            'b7r1b_k' => 'C54',
            'b7r1c_k' => 'C55',
            'b7r1d_k' => 'C56',
            'b7r2_k' => 'C57',
            'b7r3_k' => 'C58',
            'b7r4_k' => 'C59',
            'b7r5a_k' => 'C61',
            'b7r5b_k' => 'C62',
            'b7r6_k' => 'C63',
           
      
        ];
    }

    public function model(array $row)
    {
        return new kompromin([
            'b1r1_k' => $row['b1r1_k'],
            'b1r2_k' => $row['b1r2_k'],
            'b1r3a_k' => $row['b1r3a_k'],
            'b1r3b_k' => $row['b1r3b_k'],
            'b1r3c_k' => $row['b1r3c_k'],

            'b2r1a_k' => $row['b2r1a_k'],
            'b2r1b_k' => $row['b2r1b_k'],
            'b2r1c_k' => $row['b2r1c_k'],
            'b2r1d_k' => $row['b2r1d_k'],
            'b2r1e_k' => $row['b2r1e_k'],
            'b2r1f_k' => $row['b2r1f_k'],
            'b2r2a_k' => $row['b2r2a_k'],
            'b2r2b_k' => $row['b2r2b_k'],
            'b2r2c_k' => $row['b2r2c_k'],
            'b2r2d_k' => $row['b2r2d_k'],
            'b2r2e_k' => $row['b2r2e_k'],
            'b2r2f_k' => $row['b2r2f_k'],
            'b2r3a_k' => $row['b2r3a_k'],
            'b2r3b_k' => $row['b2r3b_k'],


            'b3r1_k' => $row['b3r1_k'],
            'b3r2a_k' => $row['b3r2a_k'],
            'b3r2b_k' => $row['b3r2b_k'],
            'b3r2c_k' => $row['b3r2c_k'],
            'b3r2d_k' => $row['b3r2d_k'],
            'b3r2e_k' => $row['b3r2e_k'],
            

            'b4r1_k' => $row['b4r1_k'],
            'b4r2_k' => $row['b4r2_k'],
            'b4r3_k' => $row['b4r3_k'],

            'b5r1_k' => $row['b5r1_k'],
            'b5r2_k' => $row['b5r2_k'],
            'b5r3_k' => $row['b5r3_k'],
            'b5r4_k' => $row['b5r4_k'],
            'b5r5_k' => $row['b5r5_k'],
            'b5r6_k' => $row['b5r6_k'],
            
            'b6r1_k' => $row['b6r1_k'],
            'b6r2_k' => $row['b6r2_k'],
            'b6r3a_k' => $row['b6r3a_k'],
            'b6r3b_k' => $row['b6r3b_k'],
            'b6r4_k' => $row['b6r4_k'],
            
            'b7r1a_k' => $row['b7r1a_k'],
            'b7r1b_k' => $row['b7r1b_k'],
            'b7r1c_k' => $row['b7r1c_k'],
            'b7r1d_k' => $row['b7r1d_k'],
            'b7r2_k' => $row['b7r2_k'],
            'b7r3_k' => $row['b7r3_k'],
            'b7r4_k' => $row['b7r4_k'],
            'b7r5a_k' => $row['b7r5a_k'],
            'b7r5b_k' => $row['b7r5b_k'],
            
            'b7r6_k' => $row['b7r6_k'],
            
            'organisasi' => Auth::user()->organisasi,
            'idkab' => Auth::user()->idkab,
            'form_fpkpa' => $this->year,
            'surat_pengantar' => $this->year2,
            'instrumen' => $this->year3,
       
        ]);
    }

    
}
