<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $guarded = ['id','created_at','updated_at'];
    public function getFotoUrlAttribute() {
        return asset('storage/'.$this->foto);
    }
}
