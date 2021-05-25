@extends('public.layout.main')
@section('judul','SIA Kelompok 3')
@section('content')
<h3 class="text-center mt-3">SUVIS INDONESIA</h3>
<p class="text-center text-uppercase">Pesan sekarang layanan terbaik suvis indonesia</p>

<!-- PRODUK/LAYANAN -->
<div class="container">
 <div class="card-deck">

  <div class="card">
 <a href="{{url('/pemesanan')}}" >
    <img class="card-img-top" src="{{url('assets/produk/1.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Service AC</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
</a>
  </div>

  <div class="card">
    <img class="card-img-top" src="{{url('assets/produk/1.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Service AC</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="{{url('assets/produk/1.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Service AC</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="{{url('assets/produk/1.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Service AC</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="{{url('assets/produk/1.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Service AC</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

</div>
</div>

<br>
<br>
<div class="d-flex justify-content-center" style="background-color: gray">	
<div class="container ">
	<div class="row">
		<div class="col-md-4">
			<img src="">
			<p>Pilih Layanan Suvis</p>
		</div>
		<div class="col-md-4">
			<img src="">
			<p>Pilih Penyedia Jasa</p>
		</div>
		<div class="col-md-4">
			<img src="">
			<p>Tunggu Teknisi Datang</p>
		</div>
	</div>
</div>
</div>

<br>
<br>
<br>
<br>

<!-- AKHIR PRODUK/LAYANAN -->

@endsection

