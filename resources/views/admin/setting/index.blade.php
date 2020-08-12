@extends('admin.layout.app')

@section('header')
    <h1>
        Setting Website
    </h1>
@endsection

@section('body')
    @include('admin.layout._error')

    <form enctype="multipart/form-data" action="{{ route('setting.store') }}" method="POST" role="form">
        @csrf
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Detail</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="SITE_TITLE" placeholder="Nama" value="{{ $SETTING['SITE_TITLE'] ?? '' }}">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="SITE_DESC" class="form-control" cols="30" rows="5">{{ $SETTING['SITE_DESC'] ?? '' }}</textarea>
                </div>
                <div class="form-group">
                    <label>Slogan</label>
                    <input type="text" class="form-control" name="SITE_SLOGAN" placeholder="Slogan" value="{{ $SETTING['SITE_SLOGAN'] ?? '' }}">
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Homepage</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label>URL Youtube</label>
                    <input type="text" class="form-control" name="EMBED_YT" placeholder="http://youtube.com/embed/xx" value="{{ $SETTING['EMBED_YT'] ?? '' }}">
                </div>
                <div class="form-group">
                    <label>Profil Singkat</label>
                    <textarea name="PROFIL_SINGKAT" class="form-control" cols="30" rows="5">{{ $SETTING['PROFIL_SINGKAT'] ?? '' }}</textarea>
                </div>
                <div class="form-group">
                    <label>Buka Open Recruitment?</label>
                    @php
                     $openrec = (isset($SETTING['IS_OPEN_REC'])) ? $SETTING['IS_OPEN_REC'] : null;
                    @endphp
                    <select name="IS_OPEN_REC" class="form-control">
                        <option value="n" @isSelected($openrec, "n")>Tidak</option>
                        <option value="y" @isSelected($openrec, "y")>Iya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>URL Google Form Recruitment</label>
                    <input type="text" class="form-control" name="URL_OPEN_REC" placeholder="http://forms.google.com" value="{{ $SETTING['URL_OPEN_REC'] ?? '' }}">
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
@endsection