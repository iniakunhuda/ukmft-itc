<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = ['id','created_at','updated_at'];
    public function getBannerUrlAttribute() {
        return asset('storage/'.$this->banner);
    }
}
