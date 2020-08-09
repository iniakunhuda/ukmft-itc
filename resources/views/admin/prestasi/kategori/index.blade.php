@extends('admin.layout.app')

@section('header')
    <h1>
        Kategori Prestasi
    </h1>
@endsection

@section('body')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">List Kategori</h3>

            <div class="box-tools pull-right">
                <a href="{{ route('kategori_prestasi.create') }}" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped" data-table="datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Tags</th>
                        <th style="width:20%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategori as $key => $kat)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $kat->kategori }}</td>
                        <td>{{ $kat->tag }}</td>
                        <td>
                            <a href="{{ route('kategori_prestasi.edit', $kat->id) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil" style="padding-right:10px"></i> Edit
                            </a>
                            <a href="javascript:;"
                                class="btn btn-sm btn-danger"
                                data-btn="delete"
                                data-url="{{ route('kategori_prestasi.destroy', $kat->id) }}"
                                >
                                <i class="fa fa-trash" style="padding-right:10px"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection