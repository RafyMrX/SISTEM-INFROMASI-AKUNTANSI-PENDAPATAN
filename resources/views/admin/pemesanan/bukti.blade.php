@extends('admin.layout.main')
@section('judul', 'Bukti Pembayaran')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bukti Pembayaran</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Bukti Pembayaran</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            @foreach($data as $item)
            <div class="card-body">
                <div class="row">
                    <img src="{{ asset('storage/'.$item->bukti_transaksi.'')}}" width="350">
                </div>
            </div>
            @endforeach
        </div>

    </section>
</div>
@endsection