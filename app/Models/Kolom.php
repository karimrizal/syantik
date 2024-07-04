<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kolom extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'kolom_id', 'desa'];

    public function event()
    {
        return $this->hasMany(data::class);
    }
}
