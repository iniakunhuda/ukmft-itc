<?php

namespace App\Http\Controllers\Admin;

use App\KaryaKategori;
use App\Http\Requests\KaryaKategoriRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KaryaKategoriController extends Controller
{
    protected $tmp = "admin.karya.kategori.";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kategories'] = KaryaKategori::all();
        return view($this->tmp.'index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->tmp.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KaryaKategoriRequest $request)
    {
        $kategori = KaryaKategori::create($request->toArray());
        if($kategori) {
            alert()->success('Berhasil menambah kategori', 'Sukses');
            return redirect(route('kategori_karya.index'));
        } else {
            alert()->error('Gagal menambah kategori', 'Error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KaryaKategori  $kategoriKarya
     * @return \Illuminate\Http\Response
     */
    public function show(KaryaKategori $kategoriKarya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KaryaKategori  $kategoriKarya
     * @return \Illuminate\Http\Response
     */
    public function edit(KaryaKategori $kategoriKarya)
    {
        $data['kategori'] = $kategoriKarya;
        return view($this->tmp.'create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KaryaKategori  $kategoriKarya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KaryaKategori $kategoriKarya)
    {
        $kategori = $kategoriKarya->update($request->toArray());
        if($kategori) {
            alert()->success('Berhasil memperbarui kategori', 'Sukses');
            return redirect(route('kategori_karya.index'));
        } else {
            alert()->error('Gagal memperbarui kategori', 'Error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KaryaKategori  $kategoriKarya
     * @return \Illuminate\Http\Response
     */
    public function destroy(KaryaKategori $kategoriKarya)
    {
        $kategoriKarya->delete();
        return \response()->json(['status' => 200, 'msg' => 'Berhasil']);
    }
}
