@extends('public.layout.main')
@section('judul', 'Transaksi')
@section('content')
<h3 class="text-center mt-3 mb-4">Transaksi</h3>

<div class="container">

  	
  <table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">Kode</th>
      <th scope="col">Layanan</th>
      <th scope="col">Status</th>
      <th scope="col">Total</th>
	  <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>P066h4</td>
      <td>Service AC</td>
      <td>Belum Dibayar</td>
      <td>Rp.20.000</td>
      <td><a href="" class="btn btn-secondary">Detail</a> &nbsp; <a href="{{url('/konfirmasi')}}" class="btn btn-success">Input Pembayaran</a>
      	<!-- <a href="" class="btn btn-warning">Lihat Pembayaran</a> --></td>
    </tr>
  </tbody>
</table>



  </div>


<br>
<br>
<br>
@endsection

