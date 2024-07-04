<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_rekomendasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kegiatan', 'tahun', 'dinas', 'surat_pengantar', 'formulir', 'instrumen', 'rekomendasi'
    ];
}
