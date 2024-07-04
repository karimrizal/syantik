<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'petugas_upload', 'organisasi', 'perbaikan_opd','catatan_perbaikan','idkab'];

    public function data()
    {
        return $this->hasMany(Data::class);
    }
}
