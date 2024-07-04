<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;

    protected $fillable = [ 'data', 'desa', 'tabel_id', 'kolom_id', 'kolom_id2', 'tahun', 'wilayah', 'sumber'];
    
    public function kolom()
    {
        return $this->belongsTo(Kolom::class);
    }

    public function tabel()
    {
        return $this->belongsTo(Tabel::class);
    }
}
