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
                    <h1 class="m-0">Data Transaksi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Data Transaksi</li>
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
                    <h3 class="card-title">Data Transaksi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Konsumen</th>
                                <th>Nama Konsumen</th>
                                <th>Telp Konsumen</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>K0001</td>
                                <td>Aldi</td>
                                <td>085737737738</td>
                                <td><a href="" class="btn btn-primary"><i class="fas fa-pencil-alt"></i>Detail</a></td>
                            </tr>
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