@extends('public.layout.main')
@section('judul', 'Transaksi')
@section('content')
<h3 class="text-center mt-3 mb-4">Transaksi</h3>

<div class="container">

  	
  <table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">Kode Pemesanan</th>
      <th scope="col">Layanan</th>
      <th scope="col">Status</th>
      <th scope="col">Total</th>
	  <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
  @if(session()->has('SessionPublic'))
  @if($jumlah > 0)
  @foreach($transaksi as $item)
    <tr>
      <td>{{$item->id_pemesanan}}</td>
      <td>{{$item->layanan['nama_layanan']}}</td>
      @if($item->status_pemesanan == '0')
      <td style="color: red;font-weight: bold;">Belum Dibayar</td>
      @else
      <td style="color: green;font-weight: bold;">Sudah Dibayar</td>
      @endif
      <td>Rp.{{number_format($item->total)}}</td>
      <td><a href="{{url('/nota-pemesanan/'.$item->id_pemesanan.'')}}" class="btn btn-secondary">Detail</a> &nbsp; 
      @if($item->status_pemesanan == '0')
      <a href="{{url('/konfirmasi/'.$item->id_pemesanan.'')}}" class="btn btn-success">Input Pembayaran</a>
      @endif
      	<!-- <a href="" class="btn btn-warning">Lihat Pembayaran</a> --></td>
    </tr>
    @endforeach
    @else
     <tr>
      <td colspan="5">Tidak Ada Data Transaksi</td>
    </tr>
    @endif
    @else
    <tr>
      <td colspan="5">Login Terlebih dahulu Untuk Melihat Transaksi</td>
    </tr>
    @endif
  </tbody>
</table>



  </div>


<br>
<br>
<br>
@endsection

