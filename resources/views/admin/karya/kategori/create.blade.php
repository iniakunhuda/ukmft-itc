@extends('admin.layout.app')

@section('header')
    <h1>
        Kategori Karya
    </h1>
@endsection

@section('body')
    @include('admin.layout._error')

    <div class="box">   
        <div class="box-header with-border">
            <h3 class="box-title">Tambah Kategori</h3>
        </div>
            @isset($kategori)
                <form action="{{ route('kategori_karya.update', $kategori->id) }}" method="POST" role="form">
                <input name="_method" type="hidden" value="PUT">
            @else    
                <form action="{{ route('kategori_karya.store') }}" method="POST" role="form">
            @endisset

            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" placeholder="Contoh: Web Design" value="{{ $kategori->kategori ?? '' }}">
                </div>
                <div class="form-group">
                    <label>Tags</label>
                    <input type="text" class="form-control" name="tag" placeholder="Frontend, UI/UX" value="{{ $kategori->tag ?? '' }}">
                </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection