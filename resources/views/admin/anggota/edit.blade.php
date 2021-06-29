@extends('admin.layout.main')
@section('judul', 'Edit Data Anggota')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Data Anggota</li>
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
                            <h3 class="card-title">Data Anggota</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach($anggota as $item)
                        <form action="/anggota/edit" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Anggota</label>
                                    <input type="text" class="form-control" readonly name="kode" placeholder="ID Anggota" value="{{$item->id_anggota}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username" value="{{$item->username}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama Anggota</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Anggota" value="{{$item->nama_anggota}}">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Jabatan</label>
                                    <select name="jabatan" class="form-control" id="jabatan">
                                        <option {{ ($item->jabatan) == 'Manager' ? 'selected' : '' }} value='Manager'>Manager</option>
                                        <option {{ ($item->jabatan) == 'Sales' ? 'selected' : '' }} value='Sales'>Sales</option>
                                        <option {{ ($item->jabatan) == 'Human Resource' ? 'selected' : '' }} value='Human Resource'>Human Resource</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="*******************" value="{{$item->password}}">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
@endsection