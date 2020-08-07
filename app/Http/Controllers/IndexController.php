<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function tentangKami()
    {
        return view('page.tentang');
    }

    public function listPengurus()
    {
        return view('page.pengurus');
    }
    
    public function listKarya()
    {
        return view('karya.index');
    }

    public function detailKarya()
    {
        return view('karya.detail');
    }
}
