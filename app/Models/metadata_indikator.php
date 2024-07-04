<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metadata_indikator extends Model
{
    use HasFactory;
    protected $fillable = [ 'i1','i2','i3','i4',
                            'i5','i6','i7','i8','i9',
                            'i10','i11k1','i11k2','i12k1','i12k2','i13','i13','i14','opd','id_keg'];
    
     public function seti11k1Attribute($value)
    {
        $this->attributes['i11k1'] = json_encode($value);
    }

    public function geti11k1Attribute($value)
    {
        return $this->attributes['i11k1'] = json_decode($value);
    }
    
    public function seti11k2Attribute($value)
    {
        $this->attributes['i11k2'] = json_encode($value);
    }

    public function geti11k2Attribute($value)
    {
        return $this->attributes['i11k2'] = json_decode($value);
    }
    
     public function seti12k1Attribute($value)
    {
        $this->attributes['i12k1'] = json_encode($value);
    }

    public function geti12k1Attribute($value)
    {
        return $this->attributes['i12k1'] = json_decode($value);
    }
    
    public function seti12k2Attribute($value)
    {
        $this->attributes['i12k2'] = json_encode($value);
    }

    public function geti12k2Attribute($value)
    {
        return $this->attributes['i12k2'] = json_decode($value);
    }
    

    
}
