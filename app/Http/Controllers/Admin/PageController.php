<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\AppHelper;
use App\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $tmp = "admin.pages.";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page'] = Page::all();
        return view($this->tmp.'index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['halaman'] = Page::all();
        return view($this->tmp.'create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = AppHelper::upload($request,'banner','page');
        $data = $request->toArray();
        $data['slug'] = \Str::slug($data['judul']);
        $data['banner'] = $filename;

        $page = Page::create($data);
        if ($page) {
            alert()->success('Berhasil menambah data', 'Sukses');
            return redirect(route('pages.index'));
        }else{
            alert()->error('Gagal menambah data', 'Error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $data['page'] = $page;
        $data['halaman'] = Page::all();
        return view($this->tmp.'create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $filename = AppHelper::upload_update($request,'banner','page',$page['banner']);
        $data = $request->toArray();
        $data['slug'] = \Str::slug($data['judul']);
        $data['banner'] = $filename;

        $saved = $page->update($data);
        if ($saved) {
            alert()->success('Berhasil memperbarui data', 'Sukses');
            return redirect(route('pages.edit', $page->id));
        }else{
            alert()->error('Gagal memperbarui data', 'Error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        \Storage::disk('public')->delete($page->banner);
        $page->delete();
        return \response()->json(['status' => 200, 'msg' => 'Berhasil']);
    }
}
