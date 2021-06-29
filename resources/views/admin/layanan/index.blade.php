@extends('admin.layout.main')
@section('judul', 'Layanan' )
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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            @if(session()->get('SessionJabatan') != 0)
            <div class="row">
                <div class="col-md-9">
                    <a href="{{url('/layanan/tambah')}}" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Layanan </a>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            @endif
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
                                @if(session()->get('SessionJabatan') != 0)
                                <th>Edit</th>
                                @endif
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
                                @if(session()->get('SessionJabatan') != 0)
                                <td>
                                    <a href="{{url('/layanan/'.$item->id_layanan.'')}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="{{url('/delete/'.$item->id_layanan.'')}}" class="btn btn-danger confirm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection