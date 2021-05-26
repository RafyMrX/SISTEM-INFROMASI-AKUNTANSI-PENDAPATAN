@extends('public.layout.main')
@section('judul', 'Transaksi')
@section('content')
<h3 class="text-center mt-3 mb-4">Transaksi</h3>

<div class="container">
<div class="d-flex justify-content-center">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="width: 470px;">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="    width: 233px;
    text-align: center;border: 1px solid #c0c0c0;margin-right: 4px;">Proses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style="    width: 233px;
    text-align: center; border: 1px solid #c0c0c0;">Selesai</a>
  </li>

</ul>
</div>

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  	
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
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  	
  	 <table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">Kode</th>
      <th scope="col">Layanan</th>
      <th scope="col">Total</th>
      <th scope="col">Garansi</th>
	  <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>P066h4</td>
      <td>Service AC</td>
      <td>Rp.20.000</td>
      <td>17 Hari</td>
      <td><a href="" class="btn btn-secondary">Detail</a> &nbsp; <a href="" class="btn btn-warning">Klaim Garansi</a>
      	<!-- <a href="" class="btn btn-warning">Lihat Pembayaran</a> --></td>
    </tr>
  </tbody>
</table>


  </div>

</div>

</div>

<br>
<br>
<br>
@endsection

