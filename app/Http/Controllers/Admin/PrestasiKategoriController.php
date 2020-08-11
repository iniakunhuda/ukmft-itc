<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PrestasiKategoriRequest;
use App\PrestasiKategori;
use Illuminate\Http\Request;

class PrestasiKategoriController extends Controller
{
    protected $tmp = 'admin.prestasi.kategori.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kategori'] = PrestasiKategori::all();
        return view($this->tmp.'index',$data);
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
    public function store(PrestasiKategoriRequest $request)
    {
        $kategori = PrestasiKategori::create($request->toArray());
        if($kategori) {
            alert()->success('Berhasil menambah kategori', 'Sukses');
            return redirect(route('kategori_prestasi.index'));
        } else {
            alert()->error('Gagal menambah kategori', 'Error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PrestasiKategori $kategoriPrestasi)
    {
        $data['kategori'] = $kategoriPrestasi;

        return view($this->tmp.'create',$data);
    }

    public function update(Request $request, PrestasiKategori $kategoriPrestasi)
    {
        $kategori = $kategoriPrestasi->update($request->toArray());
        if ($kategori) {
            alert()->success('Berhasil memperbarui kategori', 'Sukses');
            return redirect(route('kategori_prestasi.index'));
        }else{
            alert()->error('Gagal memperbarui kategori', 'Error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrestasiKategori $kategoriPrestasi)
    {
        $kategoriPrestasi->delete();
        return \response()->json(['status' => 200, 'msg' => 'Berhasil']);
    }
}
