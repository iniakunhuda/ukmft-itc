<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class KaryaKategori extends Model
{
    protected $fillable = ['kategori', 'tag'];

    // ngurutin nama auto
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('kategori', 'asc');
        });
    }

    public function getNamaKelasAttribute()
    {
        return Str::slug($this->kategori, '_');
    }
}
