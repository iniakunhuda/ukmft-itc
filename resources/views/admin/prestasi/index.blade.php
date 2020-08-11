@extends('admin.layout.app')

@section('header')
    <h1>
        Prestasi
    </h1>
@endsection

@section('body')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">List Halaman</h3>

            <div class="box-tools pull-right">
                <a href="{{ route('prestasi.create') }}" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped" data-table="datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lomba</th>
                        <th>Juara</th>
                        <th>Tahun</th>
                        <th>Foto</th>
                        <th style="width:20%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prestasi as $key => $row)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $row->lomba }}
                        <td>{{ $row->juara }} </td>
                        <td>{{ $row->tahun }} </td>
                        <td>
                            <img src="{{ $row->foto_url }}" class="img-responsive" style="width:100px;height:100px;object-fit:cover"  alt="Gambar">
                        </td>

                        <td>
                            <a href="{{ route('prestasi.edit', $row->id) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil" style="padding-right:10px"></i> Edit
                            </a>
                            <a href="javascript:;"
                                class="btn btn-sm btn-danger"
                                data-btn="delete"
                                data-url="{{ route('prestasi.destroy', $row->id) }}"
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