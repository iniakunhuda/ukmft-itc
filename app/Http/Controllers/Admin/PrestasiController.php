<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\AppHelper;
use App\Prestasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrestasiController extends Controller
{
    protected $tmp = "admin.prestasi.";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['prestasi'] = Prestasi::all();
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
    public function store(Request $request)
    {
        $filename = AppHelper::upload($request,'foto','prestasi');
        $data = $request->toArray();
        $data['foto'] = $filename;
        $prestasi = Prestasi::create($data);
        if ($prestasi) {
            alert()->success('Berhasil menambah data', 'Sukses');
            return redirect(route('prestasi.index'));
        }else{
            alert()->error('Gagal menambah data', 'Error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestasi $prestasi)
    {
        $data['prestasi'] = $prestasi;

        return view($this->tmp.'create',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        $filename = AppHelper::upload_update($request,'foto','prestasi',$prestasi['foto']);
        $data = $request->toArray();
        $data['foto'] = $filename;

        $saved = $prestasi->update($data);
        if ($saved) {
            alert()->success('Berhasil memperbarui data', 'Sukses');
            return redirect(route('prestasi.edit', $prestasi->id));
        }else{
            alert()->error('Gagal memperbarui data', 'Error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi $prestasi)
    {
        \Storage::disk('public')->delete($prestasi->foto);
        $prestasi->delete();
        return \response()->json(['status' => 200, 'msg' => 'Berhasil']);
    }
}
