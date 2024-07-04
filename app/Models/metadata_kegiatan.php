<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metadata_kegiatan extends Model
{
    use HasFactory;
    protected $fillable = [ 'b0r1','b0r2','b0r3','b0r4',
                            'b1r1','b1r2','b1r3','b1r4','b1r5',
                            'b2r1','b2r2','b2r3','b2r4','b2r5','b2r6','b2r7','b2r8',
                            'b3r1','b3r2','b3r3a1k1','b3r3a1k2','b3r3a2k1','b3r3a2k2','b3r3b1k1','b3r3b1k2','b3r3c1k1','b3r3c1k2','b3r3d1k1','b3r3d1k2','b3r3d2k1','b3r3d2k2','b3r3d3k1','b3r3d3k2','b3r34k1','b3r34k2','b3r34k3','b3r34k4',
                            'b4r1','b4r2','b4r3','b4r4','b4r5','b4r6','b4r7','b4r8',
                            'b5r1','b5r2','b5r3','b5r4','b5r5','b5r6','b5r7','b5r8',
                            'b6r1','b6r2','b6r3','b6r4','b6r5','b6r6a','b6r6b','b6r7',
                            'b7r1a','b7r1b','b7r1c','b7r1d','b7r2','b7r3','b7r4',
                            'b8r1a','b8r1b','b8r1c','b8r2a','b8r2b','b8r2c','opd'];
    
     public function setb3r34k1Attribute($value)
    {
        $this->attributes['b3r34k1'] = json_encode($value);
    }

    public function getb3r34k1Attribute($value)
    {
        return $this->attributes['b3r34k1'] = json_decode($value);
    }
    
     public function setb3r34k2Attribute($value)
    {
        $this->attributes['b3r34k2'] = json_encode($value);
    }

    public function getb3r34k2Attribute($value)
    {
        return $this->attributes['b3r34k2'] = json_decode($value);
    }
    
     public function setb3r34k3Attribute($value)
    {
        $this->attributes['b3r34k3'] = json_encode($value);
    }

    public function getb3r34k3Attribute($value)
    {
        return $this->attributes['b3r34k3'] = json_decode($value);
    }
    
    
     public function setb3r34k4Attribute($value)
    {
        $this->attributes['b3r34k4'] = json_encode($value);
    }

    public function getb3r34k4Attribute($value)
    {
        return $this->attributes['b3r34k4'] = json_decode($value);
    }
    
    
     public function setb4r5Attribute($value)
    {
        $this->attributes['b4r5'] = json_encode($value);
    }

    public function getb4r5Attribute($value)
    {
        return $this->attributes['b4r5'] = json_encode($value);
    }
    
    public function setb4r6Attribute($value)
    {
        $this->attributes['b4r6'] = json_encode($value);
    }

    public function getb4r6Attribute($value)
    {
        return $this->attributes['b4r6'] = json_encode($value);
    }
    
    
    public function setb4r7Attribute($value)
    {
        $this->attributes['b4r7'] = json_encode($value);
    }

    public function getb4r7Attribute($value)
    {
        return $this->attributes['b4r7'] = json_encode($value);
    }
    
    
    public function setb4r8Attribute($value)
    {
        $this->attributes['b4r8'] = json_encode($value);
    }

    public function getb4r8Attribute($value)
    {
        return $this->attributes['b4r8'] = json_encode($value);
    }
    
    
    public function setb6r2Attribute($value)
    {
        $this->attributes['b6r2'] = json_encode($value);
    }

    public function getb6r2Attribute($value)
    {
        return $this->attributes['b6r2'] = json_encode($value);
    }
    
    
    public function setb7r3Attribute($value)
    {
        $this->attributes['b7r3'] = json_encode($value);
    }

    public function getb7r3Attribute($value)
    {
        return $this->attributes['b7r3'] = json_encode($value);
    }
    
    
    public function setb7r4Attribute($value)
    {
        $this->attributes['b7r4'] = json_encode($value);
    }

    public function getb7r4Attribute($value)
    {
        return $this->attributes['b7r4'] = json_encode($value);
    }
    
}
