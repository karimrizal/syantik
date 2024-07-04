<?php

namespace App\Imports;

use App\Models\meta_kegiatan;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Auth;

class meta_kegiatan_import implements WithMappedCells, ToModel
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

    public function mapping(): array
    {
        return[
            'b0r1' => 'C4',
            'b0r2' => 'C5',
            'b0r3' => 'C6',
            'b0r4' => 'C7',
            'b0r5' => 'C8',
            'b0r6' => 'C9',
            'b1r1' => 'C11',
            'b1r2' => 'C12',
            'b1r2a' => 'C13',
            'b1r2b' => 'C14',
            'b1r2c' => 'C15',
            'b2r1a' => 'C18',
            'b2r1b' => 'C19',
            'b2r2a' => 'C21',
            'b2r2b' => 'C22',
            'b2r2c' => 'C23',
            'b2r2d' => 'C24',
            'b2r2e' => 'C25',
            'b3r1' => 'C27',
            'b3r2' => 'C28',
            'b3r3a_awal' => 'C30',
            'b3r3a_akhir' => 'C31',
            'b3r3b_awal' => 'C32',
            'b3r3b_akhir' => 'C33',
            'b3r3c_awal' => 'C34',
            'b3r3c_akhir' => 'C35',
            'b3r3d_awal' => 'C36',
            'b3r3d_akhir' => 'C37',
            'b3r3e_awal' => 'C38',
            'b3r3e_akhir' => 'C39',
            'b3r3f_awal' => 'C40',
            'b3r3f_akhir' => 'C41',
            'b3r3g_awal' => 'C42',
            'b3r3g_akhir' => 'C43',
            'b4r1' => 'C45',
            'b4r2' => 'C46',
            'b4r3' => 'C47',
            'b4r4' => 'C48',
            'b4r5' => 'C49',
            'b4r6' => 'C50',
            'b4r7' => 'C51',
            'b4r8' => 'C52',
            'b5r1' => 'C54',
            'b5r2' => 'C55',
            'b5r3a' => 'C56',
            'b5r3b' => 'C57',
            'b5r4' => 'C58',
            'b5r5' => 'C59',
            'b5r6' => 'C60',
            'b5r7' => 'C61',
            'b5r8' => 'C62',
            'b6r1' => 'C64',
            'b6r2' => 'C65',
            'b6r3' => 'C66',
            'b6r4' => 'C67',
            'b6r5' => 'C68',
            'b6r6a' => 'C70',
            'b6r6b' => 'C71',
            'b6r7' => 'C72',
            'b7r1a' => 'C75',
            'b7r1b' => 'C76',
            'b7r1c' => 'C77',
            'b7r1d' => 'C78',
            'b7r2' => 'C79',
            'b7r3' => 'C80',
            'b7r4' => 'C81',
            'b8r1a' => 'C84',
            'b8r1b' => 'C85',
            'b8r1c' => 'C86',
            'b8r2a' => 'C88',
            'b8r2b' => 'C89',
            'b8r2c' => 'C90',
        ];
    }

    public function model(array $row)
    {
        return new meta_kegiatan([
            'b0r1' => $row['b0r1'],
            'b0r2' => $row['b0r2'],
            'b0r3' => $row['b0r3'],
            'b0r4' => $row['b0r4'],
            'b0r5' => $row['b0r5'],
            'b0r6' => $row['b0r6'],
            'b1r1' => $row['b1r1'],
            'b1r2' => $row['b1r2'],
            'b1r2a' => $row['b1r2a'],
            'b1r2b' => $row['b1r2b'],
            'b1r2c' => $row['b1r2c'],
            'b2r1a' => $row['b2r1a'],
            'b2r1b' => $row['b2r1b'],
            'b2r2a' => $row['b2r2a'],
            'b2r2b' => $row['b2r2b'],
            'b2r2c' => $row['b2r2c'],
            'b2r2d' => $row['b2r2d'],
            'b2r2e' => $row['b2r2e'],
            'b3r1' => $row['b3r1'],
            'b3r2' => $row['b3r2'],
            'b3r3a_awal' => $row['b3r3a_awal'],
            'b3r3a_akhir' => $row['b3r3a_akhir'],
            'b3r3b_awal' => $row['b3r3b_awal'],
            'b3r3b_akhir' => $row['b3r3b_akhir'],
            'b3r3c_awal' => $row['b3r3c_awal'],
            'b3r3c_akhir' => $row['b3r3c_akhir'],
            'b3r3d_awal' => $row['b3r3d_awal'],
            'b3r3d_akhir' => $row['b3r3d_akhir'],
            'b3r3e_awal' => $row['b3r3e_awal'],
            'b3r3e_akhir' => $row['b3r3e_akhir'],
            'b3r3f_awal' => $row['b3r3f_awal'],
            'b3r3f_akhir' => $row['b3r3f_akhir'],
            'b3r3g_awal' => $row['b3r3g_awal'],
            'b3r3g_akhir' => $row['b3r3g_akhir'],
            'b4r1' => $row['b4r1'],
            'b4r2' => $row['b4r2'],
            'b4r3' => $row['b4r3'],
            'b4r4' => $row['b4r4'],
            'b4r5' => $row['b4r5'],
            'b4r6' => $row['b4r6'],
            'b4r7' => $row['b4r7'],
            'b4r8' => $row['b4r8'],
            'b5r1' => $row['b5r1'],
            'b5r2' => $row['b5r2'],
            'b5r3a' => $row['b5r3a'],
            'b5r3b' => $row['b5r3b'],
            'b5r4' => $row['b5r4'],
            'b5r5' => $row['b5r5'],
            'b5r6' => $row['b5r6'],
            'b5r7' => $row['b5r7'],
            'b5r8' => $row['b5r8'],
            'b6r1' => $row['b6r1'],
            'b6r2' => $row['b6r2'],
            'b6r3' => $row['b6r3'],
            'b6r4' => $row['b6r4'],
            'b6r5' => $row['b6r5'],
            'b6r6a' => $row['b6r6a'],
            'b6r6b' => $row['b6r6b'],
            'b6r7' => $row['b6r7'],
            'b7r1a' => $row['b7r1a'],
            'b7r1b' => $row['b7r1b'],
            'b7r1c' => $row['b7r1c'],
            'b7r1d' => $row['b7r1d'],
            'b7r2' => $row['b7r2'],
            'b7r3' => $row['b7r3'],
            'b7r4' => $row['b7r4'],
            'b8r1a' => $row['b8r1a'],
            'b8r1b' => $row['b8r1b'],
            'b8r1c' => $row['b8r1c'],
            'b8r2a' => $row['b8r2a'],
            'b8r2b' => $row['b8r2b'],
            'b8r2c' => $row['b8r2c'],
              'organisasi' => Auth::user()->organisasi,
              'idkab' => Auth::user()->idkab,
                'petugas_upload' => Auth::user()->name,
        ]);
    }

    /* public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            meta_kegiatan::Updateorcreate([
                'keg_judul'                 => $row[0],
                'keg_tahun'                 => $row[1],
                'keg_kode'                  => $row[2],
                'keg_pengumpulan'           => $row[3],
                'keg_sektor'                => $row[4],
                'keg_rekomendasi'           => $row[5],
                'inst_nama'                 => $row[6],
                'inst_telepon'              => $row[7],
                'inst_email'                => $row[8],
                'inst_faksimile'            => $row[9],
                'pj_eselonsatu'             => $row[10],
                'pj_eselondua'              => $row[11],
                'pj_eselontiga_jabatan'     => $row[12],
                'pj_eselontiga_alamat'      => $row[13],
                'pj_eselontiga_telepon'     => $row[14],
                'pj_eselontiga_email'       => $row[15],
                'pj_eselontiga_faksimile'   => $row[16],
                'renc_latar'                => $row[17],
                'renc_tujuan'               => $row[18],
            ]);
        }
    } */
    
    /* public function startRow(): int {
        return 2;
    } */
}
