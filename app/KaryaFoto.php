<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KaryaFoto extends Model
{
    protected $fillable = ['karya_id', 'judul', 'gambar'];

    public function getGambarUrlAttribute() {
        return asset('storage/'.$this->gambar);
    }
}
