<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arc extends Model
{
    use HasFactory;
    protected $fillable = [
        'organisasi', 'nama_data', 'tanggal_rilis', 'wilayah', 'tahun'
    ];
}
