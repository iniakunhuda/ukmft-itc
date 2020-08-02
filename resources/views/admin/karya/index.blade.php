@extends('admin.layout.app')

@section('header')
    <h1>
        Karya
    </h1>
@endsection

@section('body')
    <div class="box">   
        <div class="box-header with-border">
            <h3 class="box-title">List Karya</h3>

            <div class="box-tools pull-right">
                <a href="{{ route('karya.create') }}" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped" data-table="datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Mahasiswa</th>
                        <th style="width:20%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($karya as $key => $row)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>
                            <img src="{{ $row->gambar_url }}" class="img-responsive" style="width:100px;height:100px;object-fit:cover"  alt="Gambar">
                        </td>
                        <td>{{ $row->judul }}
                            <br>
                            <div class="label label-primary">
                                {{ $row->kategori->kategori }}
                            </div>
                        </td>
                        <td>{{ $row->desc_singkat }}</td>
                        <td>
                            {{ $row->mhs_nama ?? '-' }}
                        </td>
                        <td>
                            <a href="{{ route('karya.edit', $row->id) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil" style="padding-right:10px"></i> Edit
                            </a>
                            <a href="javascript:;" 
                                class="btn btn-sm btn-danger" 
                                data-btn="delete" 
                                data-url="{{ route('karya.destroy', $row->id) }}"
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