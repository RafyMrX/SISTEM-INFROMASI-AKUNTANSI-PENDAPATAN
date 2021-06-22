@extends('admin.layout.main')
@section('judul', 'Konsumen')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pemesanan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Data Pemesanan</li>
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
            <!-- <div class="row">
                <div class="col-md-9">
                    <a href="" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Konsumen</a>
                </div>
                <div class="col-md-3">
                </div>
            </div> -->
            <br>
            <!-- ./col -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pemesanan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Pemesanan</th>
                                <th>ID Konsumen</th>
                                <th>Waktu Pemesanan</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pemesanan as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->id_pemesanan}}</td>
                                <td>{{$item->id_konsumen}}</td>
                                <td>{{$item->waktu_pemesanan}}</td>
                                <td>Belum Dibayar</td>
                                <td><a href="{{url('/detail-pemesanan/'.$item->id_pemesanan.'')}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i>Detail</a>
                                    <a href="" class="btn btn-primary"><i class="fas fa-eye"></i>Lihat Pembayaran</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
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