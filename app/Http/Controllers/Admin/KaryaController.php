<?php

namespace App\Http\Controllers\Admin;

use App\Karya;
use App\KaryaKategori;
use App\KaryaFoto;
use App\Helpers\AppHelper;
use App\Http\Requests\KaryaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KaryaController extends Controller
{
    protected $tmp = "admin.karya.";
    protected $tmp_foto = "admin.karya.photo.";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['karya'] = Karya::all();
        return view($this->tmp.'index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kategori'] = KaryaKategori::all();
        return view($this->tmp.'create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KaryaRequest $request)
    {
        $filename = AppHelper::upload($request, 'gambar', 'karya');
        $data = $request->toArray();
        $data['slug'] = \Str::slug($data['judul']);
        $data['gambar'] = $filename;

        $karya = Karya::create($data);
        if($karya) {
            alert()->success('Berhasil menambah data', 'Sukses');
            return redirect(route('karya.index'));
        } else {
            alert()->error('Gagal menambah data', 'Error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function show(Karya $karya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function edit(Karya $karya)
    {
        $data['karya'] = $karya;
        $data['kategori'] = KaryaKategori::all();
        return view($this->tmp.'create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karya $karya)
    {
        $filename = AppHelper::upload_update($request, 'gambar', 'karya', $karya['gambar']);
        $data = $request->toArray();
        $data['slug'] = \Str::slug($data['judul']);
        $data['gambar'] = $filename;

        $saved = $karya->update($data);
        if($saved) {
            alert()->success('Berhasil memperbarui data', 'Sukses');
            return redirect(route('karya.edit', $karya->id));
        } else {
            alert()->error('Gagal memperbarui data', 'Error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karya $karya)
    {
        \Storage::disk('public')->delete($karya->gambar);
        $karya->delete();
        return \response()->json(['status' => 200, 'msg' => 'Berhasil']);
    }


    public function photo_index(Karya $karya)
    {
        $data['karya'] = $karya;
        $data['photos'] = KaryaFoto::where('karya_id', $karya->id)->get();
        return view($this->tmp_foto.'index', $data);
    }

    public function photo_create(Request $request, Karya $karya)
    {
        $filename = AppHelper::upload($request, 'gambar', 'karya_foto');
        $data = $request->toArray();
        $data['karya_id'] = $karya->id;
        $data['gambar'] = $filename;

        $saved = KaryaFoto::create($data);
        if($saved) {
            alert()->success('Berhasil menambah foto', 'Sukses');
            return redirect(route('karya.photo.index', $karya->id));
        } else {
            alert()->error('Gagal menambah foto', 'Error');
            return redirect()->back()->withInput();
        }
    }

    public function photo_delete(Request $request, KaryaFoto $photo)
    {
        \Storage::disk('public')->delete($photo->gambar);
        $photo->delete();
        return \response()->json(['status' => 200, 'msg' => 'Berhasil']);
    }
}
