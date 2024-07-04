<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_tiga extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function kolom()
    {
        return $this->belongsTo(Kolom::class);
    }
}
