<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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
}
