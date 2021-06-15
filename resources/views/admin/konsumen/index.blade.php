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
                    <<<<<<< HEAD <h1 class="m-0">Data Konsumen</h1>
                        =======
                        <h1 class="m-0">Laporan Konsumen</h1>
                        >>>>>>> f034a29 (nambah data tables)
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <<<<<<< HEAD <li class="breadcrumb-item active">Data Konsumen</li>
                            =======
                            <li class="breadcrumb-item active">Laporan Konsumen</li>
                            >>>>>>> f034a29 (nambah data tables)
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
            <br>
            <!-- ./col -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Konsumen</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Konsumen</th>
                                <th>Nama Konsumen</th>
                                <th>Alamat Konsumen</th>
                                <th>Telpon Konsumen</th>
                                <th>Email Konsumen</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        @if($count > 0)
                        <tbody>
                            @foreach($konsumen as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->id_konsumen}}</td>
                                <td>{{$item->nama_konsumen}}</td>
                                <td>{{$item->alamat_konsumen}}</td>
                                <td>{{$item->telp_konsumen}}</td>
                                <td>{{$item->email_konsumen}}</td>
                                <td>
                                    <a href="{{url('/konsumen/'.$item->id_konsumen.'')}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{url('/delete/'.$item->id_konsumen.'')}}" class="btn btn-danger confirm"><i class="fas fa-trash-alt"></i></a>
                                    <!-- <form action="/konsumen/{{$item->id_konsumen}}" method="post" class="d-inline" id="delete{{$item->id_layanan}}"> -->
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
                            @foreach($konsumen as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->id_konsumen}}</td>
                                <td>{{$item->nama_konsumen}}</td>
                                <td>{{$item->alamat_konsumen}}</td>
                                <td>{{$item->telp_konsumen}}</td>
                                <td>{{$item->email_konsumen}}</td>
                                <td>
                                    <a href="{{url('/konsumen/'.$item->id_konsumen.'')}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{url('/delete/'.$item->id_konsumen.'')}}" class="btn btn-danger confirm"><i class="fas fa-trash-alt"></i></a>
                                    <!-- <form action="/konsumen/{{$item->id_konsumen}}" method="post" class="d-inline" id="delete{{$item->id_layanan}}"> -->
                                    <!-- @method('delete')
                                    @csrf -->
                                    <!-- </form> -->
                                </td>
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