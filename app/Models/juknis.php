<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class juknis extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_juknis', 'link_juknis'
    ];
}
