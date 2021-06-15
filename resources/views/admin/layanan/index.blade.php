@extends('admin.layout.main')
<<<<<<< HEAD @section('judul', 'Layanan' )=======@section('judul', 'Konsumen' )>>>>>>> f034a29 (nambah data tables)
    @section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
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
        <!-- /.content-header -->

<<<<<<< HEAD
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-9">
                        <a href="{{url('/layanan/tambah')}}" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Layanan </a>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                <br>
                <!-- ./col -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Layanan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Layanan</th>
                                    <th>Nama Layanan</th>
                                    <th>Deskrispi Layanan</th>
                                    <th>Foto</th>
                                    <th>Harga Layanan</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            @if($count > 0)
                            <tbody>
                                @foreach($layanan as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->id_layanan}}</td>
                                    <td>{{$item->nama_layanan}}</td>
                                    <td>{{$item->deskripsi_layanan}}</td>
                                    <td><img src="{{ asset('storage/'.$item->foto_layanan.'')}}" width="130"></td>
                                    <td>Rp. {{$item->harga_layanan}}</td>
                                    <td>
                                        <a href="{{url('/layanan/'.$item->id_layanan.'')}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{url('/delete/'.$item->id_layanan.'')}}" class="btn btn-danger confirm"><i class="fas fa-trash-alt"></i></a>
                                        <!-- <form action="/layanan/{{$item->id_layanan}}" method="post" class="d-inline" id="delete{{$item->id_layanan}}"> -->
                                        <!-- @method('delete')
                                    @csrf -->
                                        <!-- </form> -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @endif
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tasman</td>
                                    <td>Internet Explorer 5.1</td>
                                    <td>Mac OS 7.6-9</td>
                                    <td>1</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Tasman</td>
                                    <td>Internet Explorer 5.2</td>
                                    <td>Mac OS 8-X</td>
                                    <td>1</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Misc</td>
                                    <td>NetFront 3.1</td>
                                    <td>Embedded devices</td>
                                    <td>-</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Misc</td>
                                    <td>NetFront 3.4</td>
                                    <td>Embedded devices</td>
                                    <td>-</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Misc</td>
                                    <td>Dillo 0.8</td>
                                    <td>Embedded devices</td>
                                    <td>-</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Misc</td>
                                    <td>Links</td>
                                    <td>Text only</td>
                                    <td>-</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Misc</td>
                                    <td>Lynx</td>
                                    <td>Text only</td>
                                    <td>-</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Misc</td>
                                    <td>IE Mobile</td>
                                    <td>Windows Mobile 6</td>
                                    <td>-</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Misc</td>
                                    <td>PSP browser</td>
                                    <td>PSP</td>
                                    <td>-</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>U</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
=======
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-9">
                    <a href="{{url('/layanan/tambah')}}" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Layanan </a>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            <br>
            <!-- ./col -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Layanan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Layanan</th>
                                <th>Nama Layanan</th>
                                <th>Deskrispi Layanan</th>
                                <th>Foto</th>
                                <th>Harga Layanan</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        @if($count > 0)
                        <tbody>
                            @foreach($layanan as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->id_layanan}}</td>
                                <td>{{$item->nama_layanan}}</td>
                                <td>{{$item->deskripsi_layanan}}</td>
                                <td><img src="{{ asset('storage/'.$item->foto_layanan.'')}}" width="130"></td>
                                <td>Rp. {{$item->harga_layanan}}</td>
                                <td>
                                    <a href="{{url('/layanan/'.$item->id_layanan.'')}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{url('/delete/'.$item->id_layanan.'')}}" class="btn btn-danger confirm"><i class="fas fa-trash-alt"></i></a>
                                    <!-- <form action="/layanan/{{$item->id_layanan}}" method="post" class="d-inline" id="delete{{$item->id_layanan}}"> -->
                                    <!-- @method('delete')
                                    @csrf -->
                                    <!-- </form> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @endif
                    </table>
>>>>>>> a24647e (edit layanan dan edit page lain)
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    @endsection