<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metadata_variabel extends Model
{
    use HasFactory;
    protected $fillable = [ 'v1','v2','v3','v4',
                            'v5','v6','v7','v8','v9',
                            'v10k1','v10k2','v11','v12','v13','opd','id_keg'];
    
     public function setv10k1Attribute($value)
    {
        $this->attributes['v10k1'] = json_encode($value);
    }

    public function getv10k1Attribute($value)
    {
        return $this->attributes['v10k1'] = json_decode($value);
    }
    
    public function setv10k2Attribute($value)
    {
        $this->attributes['v10k2'] = json_encode($value);
    }
    public function getv10k2Attribute($value)
    {
        return $this->attributes['v10k2'] = json_decode($value);
    }

   
    
}
