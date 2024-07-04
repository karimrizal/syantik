<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class rekomendasi extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'b1r1',
        'b1r2',
        'b1r3a',
        'b1r3b',
        'b1r3c',

        'b2r1a',
        'b2r1b',
        'b2r1c',
        'b2r1d',
        'b2r1e',
        'b2r2a',
        'b2r2b',
        'b2r2c',
        'b2r2d',
        'b2r2e',
        'b2r2f',
        'b2r3a',
        'b2r3b',

        'b3r1',
        'b3r2',
        'b3r3',

        'b4r1',
        'b4r2',

        'b5r1',
        'b5r2',
        'b5r3',
        'b5r4',
        'b5r5',
        'b5r6a',
        'b5r6b',
        'b5r7',
        'b5r8',
        'b5r9',
        'b5r10',
        'b5r11a',
        'b5r11b',

        'b6r1',
        'b6r2',
        'b6r3',
        'b6r4',
        'b6r5',
        'b6r6',
        'b6r7',

        'b7r1a',
        'b7r1b',
        'b7r1c',
        'b7r2',
        'b7r3',
        'b7r4a',
        'b7r4b',
        'b7r4c',
        'b7r4d',
        'b7r4e',
        'b7r5a',
        'b7r5b',
        'b7r5c',
        'b7r5d',
        'b7r5e',
        'b7r6',
        
        'status',
        'komentar',
        'petugas',
        'tanggal',
        'tanggal_bps',
        'status_bps',
        'komentar_bps',
        'petugas_bps',
        'organisasi',
        'form_fs3',
        'surat_pengantar',
        'instrumen',
        'perbaikan_opd',
        'catatan_perbaikan',
        'idkab'
     
        
    ];


}
