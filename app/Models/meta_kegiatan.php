<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class meta_kegiatan extends Model
{
    use HasFactory;

    protected $table = "meta_kegiatan";

    protected $fillable = [
        'b0r1',
        'b0r2',
        'b0r3',
        'b0r4',
        'b0r5',
        'b0r6',
        'b1r1',
        'b1r2',
        'b1r2a',
        'b1r2b',
        'b1r2c',
        'b2r1a',
        'b2r1b',
        'b2r2a',
        'b2r2b',
        'b2r2c',
        'b2r2d',
        'b2r2e',
        'b3r1',
        'b3r2',
        'b3r3a_awal',
        'b3r3a_akhir',
        'b3r3b_awal',
        'b3r3b_akhir',
        'b3r3c_awal',
        'b3r3c_akhir',
        'b3r3d_awal',
        'b3r3d_akhir',
        'b3r3e_awal',
        'b3r3e_akhir',
        'b3r3f_awal',
        'b3r3f_akhir',
        'b3r3g_awal',
        'b3r3g_akhir',
        'b4r1',
        'b4r2',
        'b4r3',
        'b4r4',
        'b4r5',
        'b4r6',
        'b4r7',
        'b4r8',
        'b5r1',
        'b5r2',
        'b5r3a',
        'b5r3b',
        'b5r4',
        'b5r5',
        'b5r6',
        'b5r7',
        'b5r8',
        'b6r1',
        'b6r2',
        'b6r3',
        'b6r4',
        'b6r5',
        'b6r6a',
        'b6r6b',
        'b6r7',
        'b7r1a',
        'b7r1b',
        'b7r1c',
        'b7r1d',
        'b7r2',
        'b7r3',
        'b7r4',
        'b8r1a',
        'b8r1b',
        'b8r1c',
        'b8r2a',
        'b8r2b',
        'b8r2c',
        
        
        'user_verifikasi',
        'tanggal_verifikasi',
        'status_verifikasi',
        'status_tampil',
        'alasan_tampil',
        'petugas_wali',
        'tanggal_wali',
        'status_wali',
        'alasan_tampil_wali',
        
        'petugas_opd',
        'tanggal_opd',
        'status_opd',
        'alasan_tampil_opd',
        
        'perbaikan_opd',
        'catatan_perbaikan',
        
        'organisasi',
        'petugas_upload',
        'idkab'
    ];
    
       public function meta_indikators(){
        return $this->belongsToMany(meta_Indikator::class, 'metadata')->withPivot('kegiatan_id'); 
        
    }
}
