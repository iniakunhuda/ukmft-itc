@extends('admin.layout.app')

@section('header')
    <h1>
        Karya
    </h1>
@endsection

@php
    $karya_kategori = (isset($karya)) ? $karya->kategori_id : null;    
@endphp

@section('body')
    @include('admin.layout._error')

    <div class="box">   
        <div class="box-header with-border">
            <h3 class="box-title">{{ (isset($karya)) ? 'Edit' : 'Tambah' }} Karya</h3>

            @isset($karya)
                <div class="pull-right">
                <a href="{{ route('karya.photo.index', $karya->id) }}" class="btn btn-primary">
                        <i class="fa fa-th"></i> Foto Karya
                    </a>
                </div>
            @endisset
        </div>
            @isset($karya)
                <form enctype="multipart/form-data" action="{{ route('karya.update', $karya->id) }}" method="POST" role="form">
                <input name="_method" type="hidden" value="PUT">
            @else    
                <form enctype="multipart/form-data" action="{{ route('karya.store') }}" method="POST" role="form">
            @endisset

            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori_id" class="form-control">
                        <option value="">Pilih Kategori</option>
                        @foreach ($kategori as $item)
                            <option value="{{ $item->id }}" @isSelected($karya_kategori, $item->id)>{{ $item->kategori }}</option>                            
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Judul Karya</label>
                    <input type="text" class="form-control" name="judul" placeholder="Aplikasi Mewarnai" value="{{ $karya->judul ?? '' }}">
                </div>
                <div class="form-group">
                    <label>Deskripsi Singkat</label>
                    <input type="text" class="form-control" name="desc_singkat" placeholder="Aplikasi untuk anak-anak usia 5-10 tahun" value="{{ $karya->desc_singkat ?? '' }}">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="desc" placeholder="Aplikasi ini dibuat oleh Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, molestias! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, molestias!" class="form-control" cols="30" rows="5">{{ $karya->desc ?? '' }}</textarea>
                </div>
                <div class="form-group">
                    <label>Juara</label>
                    <input type="text" class="form-control" name="juara" placeholder="Juara 1 (Tidak wajib diisi)" value="{{ $karya->juara ?? '' }}">
                </div>
                <div class="form-group">
                    <label>Nama Lomba</label>
                    <input type="text" class="form-control" name="lomba" placeholder="Game Competition Indonesia (Tidak wajib diisi)" value="{{ $karya->lomba ?? '' }}">
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="mhs_nama" placeholder="Fulan (Tidak wajib diisi)" value="{{ $karya->mhs_nama ?? '' }}">
                        </div>
                    </div>
                    {{-- <div class="col-sm-6">
                        <div class="form-group">
                            <label>Angkatan Mahasiswa</label>
                            <input type="text" class="form-control" name="mhs_angkatan" placeholder="2019 (Tidak wajib diisi)" value="{{ $karya->mhs_angkatan ?? '' }}">
                        </div>
                    </div> --}}
                </div>
                <div class="form-group">
                    <label>Gambar Banner</label>
                    @isset($karya)
                        <br>
                        <img src="{{ $karya->gambar_url }}" style="width:100px;height:100px;object-fit:cover" alt="Gambar">
                        <br>
                    @endif
                    <input type="file" class="form-control" name="gambar" placeholder="Game Competition Indonesia (Tidak wajib diisi)" value="{{ $karya->gambar ?? '' }}">
                </div>
                <div class="form-group">
                    <label>URL</label>
                    <input type="text" class="form-control" name="url" placeholder="http://google.com/ (Tidak wajib diisi)" value="{{ $karya->url ?? '' }}">
                </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection