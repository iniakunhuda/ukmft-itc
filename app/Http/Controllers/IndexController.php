<?php

namespace App\Http\Controllers;

use App\Page;
use App\Karya;
use App\KaryaKategori;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data['karya_kategories'] = KaryaKategori::all();
        $data['karyas'] = Karya::take(8)
                            ->orderBy('judul', 'ASC')->get();
        return view('welcome', $data);
    }

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
        $data['karya_kategories'] = KaryaKategori::all();
        $data['karyas'] = Karya::orderBy('judul', 'ASC')->paginate(32);
        return view('karya.index', $data);
    }

    public function detailKarya($id, $slug)
    {
        $karya = Karya::find($id);
        if(!$karya) abort(404);

        $data['karya'] = $karya;
        return view('karya.detail', $data);
    }

    public function pageDetail($id)
    {
        $page = Page::find($id);
        if(!$page) abort(404);

        $data['page'] = $page;
        return view('page.detail', $data);
    }
}
