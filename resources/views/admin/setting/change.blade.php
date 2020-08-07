@extends('admin.layout.app')

@section('header')
    <h1>
        Change Password
    </h1>
@endsection

@section('body')
    @include('admin.layout._error')

    <div class="box">
                <form enctype="multipart/form-data" action="{{ route('admin.update', Auth::user()->id) }}" method="POST" role="form">
                <input name="_method" type="hidden" value="PUT">
            @csrf
            <h1> </h1>
            <div class="box-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ Auth::user()->name ?? '' }}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="">
                </div>
                <div class="form-group">
                    <label>Password Lama</label>
                    <input type="password" class="form-control" name="oldpassword" placeholder="Password Lama" value="">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="password" class="form-control" name="newpassword" placeholder="Password Baru">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Ulangi Password Baru</label>
                            <input type="password" class="form-control" name="confirmpassword" placeholder="Konfirmasi Password Baru">
                        </div>
                    </div>
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