@extends('admin.layout.app')

@section('header')
    <a href="{{ route('karya.edit', $karya->id) }}" class="btn btn-xs btn-primary">
        <i class="fa fa-arrow-left" style="margin-right:10px"></i>
        Kembali</a><br><br>
    <h1>
        {{ $karya->judul }}
    </h1>
@endsection

@section('body')
    <div class="row">
        <div class="col-sm-4">
            <div class="box">   
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Baru</h3>
        
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                          <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <form enctype="multipart/form-data" action="{{ route('karya.photo.create', $karya->id) }}" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label>Judul Gambar</label>
                            <input type="text" class="form-control" name="judul" placeholder="Tampilan Dashboard" >
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" class="form-control" name="gambar" placeholder="Game Competition Indonesia (Tidak wajib diisi)" >
                        </div>
                        <div class="box-footer">
                          <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- col -->
        <div class="col-sm-8">
            <div class="box">   
                <div class="box-header with-border">
                    <h3 class="box-title">List Foto</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped" data-table="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th style="width:20%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($photos as $key => $row)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    <img src="{{ $row->gambar_url }}" class="img-responsive" style="width:100px;height:100px;object-fit:cover"  alt="Gambar">
                                </td>
                                <td>{{ $row->judul }}
                                </td>
                                <td>
                                    <a href="javascript:;" 
                                        class="btn btn-sm btn-danger" 
                                        data-btn="delete" 
                                        data-url="{{ route('karya.photo.destroy', $row->id) }}"
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
        </div><!-- col -->
    </div>
@endsection