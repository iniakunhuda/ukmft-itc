@extends('admin.layout.app')

@section('header')
    <h1>
        Pages
    </h1>
@endsection

@section('body')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">List Halaman</h3>

            <div class="box-tools pull-right">
                <a href="{{ route('pages.create') }}" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped" data-table="datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Banner</th>
                        <th>Tag</th>
                        <th style="width:20%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($page as $key => $row)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $row->judul }}
                        <td>
                            <img src="{{ $row->banner_url }}" class="img-responsive" style="width:100px;height:100px;object-fit:cover"  alt="Gambar">
                        </td>

                        <td>{{ $row->tag }} </td>
                        <td>
                            <a href="{{ route('pages.edit', $row->id) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil" style="padding-right:10px"></i> Edit
                            </a>
                            <a href="javascript:;"
                                class="btn btn-sm btn-danger"
                                data-btn="delete"
                                data-url="{{ route('pages.destroy', $row->id) }}"
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