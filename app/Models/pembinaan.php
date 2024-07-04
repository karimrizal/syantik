<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembinaan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_pembinaan','instansi_pembinaan','jabatan', 'email_pembinaan','nomor_hp','pembinaan','status','komentar'];

    public function setPembinaanAttribute($value)
    {
        $this->attributes['pembinaan'] = json_encode($value);
    }

    public function getPembinaanAttribute($value)
    {
        return $this->attributes['pembinaan'] = json_decode($value);
    }

    
}
