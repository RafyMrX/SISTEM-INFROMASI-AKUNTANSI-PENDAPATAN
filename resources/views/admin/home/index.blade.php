@extends('admin.layout.main')
@section('judul', 'Home')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @if(session()->get('SessionJabatan') == 2)
    <H1>Selamat Datang Bagian Sales</H1>
    @endif
    @if(session()->get('SessionJabatan') == 0)
    <H1>Selamat Datang Bagian Human Resource</H1>
    @endif
    @if(session()->get('SessionJabatan') == 1)
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Pendapatan</li>
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

            <div class="row">
                <!-- ./col -->

                <div class="col-md-3">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$t_berhasil}}</h3>

                            <p>Total Transaksi Berhasil</p>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-none"></i></a>
                    </div>

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$t_pending}}</h3>

                            <p>Total Transaksi Belum Dibayar</p>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-none"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$t_confirm}}</h3>

                            <p style="font-size: 11.3pt;">Total Transaksi Menunggu Konfirmasi</p>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-none"></i></a>
                    </div>
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$t_tolak}}</h3>

                            <p>Total Transaksi Ditolak</p>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-none"></i></a>
                    </div>


                </div>
                <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Rp {{number_format($t_pendapatan,0,',','.')}}</h3>

                            <p>Laporan Pendapatan</p>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-none"></i></a>
                    </div>
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <!--   <h3>Rp 12.000.000</h3> -->
                            <h3>Rp. {{number_format($total,0,',','.')}}</h3>
                            <p>Laba Bersih</p>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-none"></i></a>
                    </div>
                </div>

                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">

                    <!-- Custom tabs (Charts with tabs)-->

                    <div id="container" style="width:100%; height:400px;">
                        <script type="text/javascript">
                            var pendapatan = <?php echo str_replace('"', '', json_encode($cart_pendapatan)); ?>;
                            var tgl = <?php echo json_encode($tanggal) ?>;
                            Highcharts.chart('container', {
                                chart: {
                                    type: 'line'
                                },
                                title: {
                                    text: 'Grafik Pendapatan Bulanan'
                                },

                                xAxis: {
                                    categories: tgl
                                },
                                yAxis: {
                                    title: {
                                        text: 'Pendapatan'
                                    }
                                },
                                plotOptions: {
                                    line: {
                                        dataLabels: {
                                            enabled: true
                                        },
                                        enableMouseTracking: false
                                    }
                                },
                                series: [{
                                    name: 'Pendapatan',
                                    data: pendapatan
                                }]
                            });
                        </script>
                    </div>
                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Transaksi Terakhir</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                @foreach($last_order as $item)
                                <li class="item">
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product" style="margin-left: -59px;">
                                            {{$item->id_pemesanan}} &nbsp;
                                            {{$item->nama}}
                                            <span class="badge badge-warning float-right">Rp. {{number_format($item->total)}}</span></a>
                                    </div>
                                </li>
                                @endforeach
                                <!-- /.item -->
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <a href="javascript:void(0)" class="uppercase"></a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- Map card -->

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endif
</div>



@endsection