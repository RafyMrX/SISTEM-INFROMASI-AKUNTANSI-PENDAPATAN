@extends('admin.layout.main')
@section('judul', 'Anggota')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            @if(session()->get('SessionJabatan') != 2)
            <div class="row">
                <div class="col-md-9">
                    <a href="{{url('/anggota/tambah')}}" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Anggota </a>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            @endif
            <br>
            <!-- ./col -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Anggota</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Anggota</th>
                                <th>Nama Anggota</th>
                                <th>Username</th>
                                <th>Jabatan</th>
                                @if(session()->get('SessionJabatan') != 2)
                                <th>Edit</th>
                                @endif
                            </tr>
                        </thead>
                        @if($count > 0)
                        <tbody>
                            @foreach($anggota as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->id_anggota}}</td>
                                <td>{{$item->nama_anggota}}</td>
                                <td>{{$item->username}}</td>
                                <td>{{$item->jabatan}}</td>
                                @if(session()->get('SessionJabatan') != 2)
                                <td>
                                    <a href="{{url('/anggota/'.$item->id_anggota.'')}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="{{url('/adelete/'.$item->id_anggota.'')}}" class="btn btn-danger confirm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    <!-- <form action="/layanan/{{$item->id_layanan}}" method="post" class="d-inline" id="delete{{$item->id_layanan}}"> -->
                                    <!-- @method('delete')
                                    @csrf -->
                                    <!-- </form> -->
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                        @endif
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection