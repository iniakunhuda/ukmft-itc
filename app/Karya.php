<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Karya extends Model
{
    protected $fillable = ['judul', 'slug', 'kategori_id', 'desc_singkat', 'desc', 'juara', 'lomba', 'mhs_nama', 'mhs_angkatan', 'gambar', 'url'];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('created_at', 'desc');
        });
    }

    public function kategori() {
        return $this->belongsTo(KaryaKategori::class, 'kategori_id', 'id');
    }

    public function getGambarUrlAttribute() {
        return asset('storage/'.$this->gambar);
    }
}
