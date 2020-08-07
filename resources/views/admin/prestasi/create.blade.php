@extends('admin.layout.app')

@section('header')
    <h1>
        Prestasi
    </h1>
@endsection

@section('body')
    @include('admin.layout._error')

    <div class="box">
            @isset($prestasi)
                <form enctype="multipart/form-data" action="{{ route('prestasi.update', $karya->id) }}" method="POST" role="form">
                <input name="_method" type="hidden" value="PUT">
            @else
                <form enctype="multipart/form-data" action="{{ route('prestasi.store') }}" method="POST" role="form">
            @endisset

            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label>Nama Lomba</label>
                    <input type="text" class="form-control" name="lomba" placeholder="Gemastik" value="{{ $karya->judul ?? '' }}">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" id="ckeditor" placeholder="Aplikasi ini dibuat oleh Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, molestias! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, molestias!" class="form-control" cols="30" rows="5">{{ $karya->desc ?? '' }}</textarea>
                </div>
                <div class="form-group">
                    <label>Juara</label>
                    <input type="text" class="form-control" name="juara" placeholder="Juara 1" value="{{ $karya->juara ?? '' }}">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" class="form-control" name="tahun" placeholder="2019" value="{{ $karya->mhs_nama ?? '' }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tingkat</label>
                            <input type="text" class="form-control" name="tingkat" placeholder="Provinsi" value="{{ $karya->mhs_angkatan ?? '' }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Gambar (1:1)</label>
                    @isset($karya)
                        <br>
                        <img src="{{ $karya->gambar_url }}" style="width:100px;height:100px;object-fit:cover" alt="Gambar">
                        <br>
                    @endif
                    <input type="file" class="form-control" name="foto" placeholder="Game Competition Indonesia (Tidak wajib diisi)" value="{{ $karya->gambar ?? '' }}">
                </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection
@push('js')
<script>
    CKEDITOR.replace('ckeditor');
</script>
@endpush