@extends('admin.layout.app')

@section('header')
<h1>
    Pages
</h1>
@endsection

@section('body')
@include('admin.layout._error')

<div class="box">
    @isset($page)
    <form enctype="multipart/form-data" action="{{ route('pages.update', $page->id) }}" method="POST" role="form">
        <input name="_method" type="hidden" value="PUT">
        @else
        <form enctype="multipart/form-data" action="{{ route('pages.store') }}" method="POST" role="form">
            @endisset

            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label>Judul Halaman</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul Halaman"
                        value="{{ $page->judul ?? '' }}">
                </div>
                <div class="form-group">
                    <label>Halaman id</label>
                    <select name="page_id" class="form-control">
                        <option value="">Pilih Kategori</option>
                        @foreach ($halaman as $item)
                        @isset($page)
                            @if ($item->id != $page->id)
                                <option value="{{ $item->id }}" @isSelected($page->page_id, $item->id)>{{ $item->judul }}</option>
                            @endif
                        @endisset
                        <option value="{{ $item->id }}" @isSelected($page->page_id, $item->id)>{{ $item->judul }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Isi Halaman</label>
                    <textarea name="isi" id="ckeditor"
                        placeholder="Aplikasi ini dibuat oleh Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, molestias! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, molestias!"
                        class="form-control" cols="30" rows="5">{{ $page->isi ?? '' }}</textarea>
                </div>
                <div class="form-group">
                    <label>Banner </label>
                    @isset($page)
                    <br>
                    <img src="{{ $page->banner_url }}" style="width:100px;height:100px;object-fit:cover" alt="Gambar">
                    <br>
                    @endif
                    <input type="file" class="form-control" name="banner"
                        placeholder="Game Competition Indonesia (Tidak wajib diisi)" value="{{ $karya->banner ?? '' }}">
                </div>
                <div class="form-group">
                    <label>Tag</label>
                    <input type="text" class="form-control" name="tag" placeholder="Tentang Kami, Sejarah"
                        value="{{ $page->tag ?? '' }}">
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
