@extends('admin.layout.main')
@section('judul', 'Tambah Data Layanan')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Layanan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Data Layanan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Layanan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/layanan/tambah" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Layanan</label>
                                    <input type="text" class="form-control" readonly name="kode" placeholder="ID Layanan" value="{{$kode}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama Layanan</label>
                                    <input type="text" class="form-control" name="namalayanan" placeholder="Nama Layanan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Harga Layanan</label>
                                    <input type="text" class="form-control" name="harga" placeholder="Hargga Layanan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto Layanan</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="form-control" name="gambar">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Layanan</label>
                                    <textarea class="form-control" rows="3" placeholder="Deskripsi Layanan" name="deskripsi"></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
@endsection