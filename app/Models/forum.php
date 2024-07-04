<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forum extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'topik', 'pimpinan_forum', 'tempat_forum', 'tanggal_forum', 'undangan_forum', 'notulen_forum', 'daftar_hadir', 'materi_forum', 'foto_forum'
    ];
}
