<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class meta_Variabel extends Model
{
    use HasFactory;

    protected $table = "meta_variabel";

    protected $fillable = [
        'var_b1k2',
        'var_b1k3',
        'var_b1k4',
        'var_b1k5',
        'var_b1k6',
        'var_b1k7',
        'var_b1k8',
        'var_b1k9',
        'var_b1k10',
        'var_b1k11',
        'var_b1k12',
        'tahun',
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
}
