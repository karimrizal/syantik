<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class meta_Indikator extends Model
{
    use HasFactory;

    protected $table = "meta_indikator";

    protected $fillable = [
        'ind_b1k2',
        'ind_b1k3',
        'ind_b1k4',
        'ind_b1k5',
        'ind_b1k6',
        'ind_b1k7',
        'ind_b1k8',
        'ind_b1k9',
        'ind_b1k10',
        'ind_b1k11',
        'ind_b1k12',
        'ind_b1k13',
        'ind_b1k14',
        'ind_b1k15',
        'ind_b1k16',
        'ind_b1k17',
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
