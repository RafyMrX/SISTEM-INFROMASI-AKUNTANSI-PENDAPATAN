@extends('admin.layout.main')
@section('judul', 'Detail Pemesanan')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Pemesanan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pemesanan</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            @foreach($detail as $item)
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p style="font-size: 13pt" class="font-weight-bold">Pemesanan</p>
                        <table>
                            <tr>
                                <td><b>ID</b></td>
                                <td></td>
                                <td></td>
                                <td>{{$item->id_pemesanan}}</td>
                            </tr>
                            <tr>
                                <td><b>Tanggal</b></td>
                                <td></td>
                                <td></td>
                                <td>{{$item->waktu_kunjungan.', '.$item->waktu_pemesanan}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                        <p style="font-size: 13pt" class="font-weight-bold">Konsumen</p>
                        <table>
                            <tr>
                                <td><b>ID</b></td>
                                <td></td>
                                <td></td>
                                <td>{{$item->id_konsumen}}</td>
                            </tr>
                            <tr>
                                <td><b>Nama</b></td>
                                <td></td>
                                <td></td>
                                <td>{{$item->nama}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>
                <p style="font-size: 13pt; border-bottom: 1px solid gray" class="font-weight-bold text-center">Data Pemesanan</p>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>ID Layanan</td>
                                    <td>:</td>
                                    <td class="v">{{$item->id_layanan}}</td>
                                </tr>
                                <tr>
                                    <td>Nama Layanan</td>
                                    <td>:</td>
                                    <td class="v">{{$item->Layanan['nama_layanan']}}</td>
                                </tr>
                                <tr>
                                    <td>Waktu Kunjungan</td>
                                    <td>:</td>
                                    <td class="v">{{date('d-F-Y', strtotime($item->waktu_kunjungan))}}</td>
                                </tr>

                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td class="v">{{$item->alamat_pemesanan}}</td>
                                </tr>

                                <tr>
                                    <td>Subtotal</td>
                                    <td>:</td>
                                    <td class="v">Rp.{{number_format($item->Layanan['harga_layanan'])}}</td>
                                </tr>

                                <tr>
                                    <td>Biaya Admin</td>
                                    <td>:</td>
                                    <td class="v">Rp.4.000</td>
                                </tr>

                                <tr>
                                    <td>Pajak PPN</td>
                                    <td>:</td>
                                    <td class="v">Rp.6.000</td>
                                </tr>

                                <tr>
                                    <td><b>Total</b></td>
                                    <td>:</td>
                                    <td class="v"><b>Rp.{{number_format($item->total)}}</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <!-- <div class="card-footer">
                Footer
            </div> -->
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

        @endforeach

    </section>
    <!-- /.content -->
</div>
@endsection