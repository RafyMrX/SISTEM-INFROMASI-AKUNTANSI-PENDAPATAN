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
      <h5 class="card-title text-center">Service AC</h5>
      <p class="card-text"></p>
    </div>
</a>
  </div>

  <div class="card">
    <img class="card-img-top" src="{{url('assets/produk/1.jpg')}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title text-center">Service Mesin Cuci</h5>
      <p class="card-text"></p>

    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="{{url('assets/produk/1.jpg')}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title text-center">Service Kulkas</h5>
      <p class="card-text"></p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="{{url('assets/produk/1.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-center">Service TV</h5>
      <p class="card-text"></p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="{{url('assets/produk/1.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-center">Service Pompa Air</h5>
    </div>
  </div>

</div>
</div>

<br>
<br>
<div class="" style="background-color: #efefef; padding: 30px;">	
<div class="container justify-content-center">
	<h4 class="text-center mb-5">Cara Memesan Layanan Suvis Indonesia</h4>
	<div class="row text-center">
		<div class="col-md-4 ">
			<img src="{{url('assets/icon/1.png')}}" width="90">
			<h5>Pilih Layanan Suvis</h5>
		</div>
		<div class="col-md-4">
			<img src="{{url('assets/icon/2.png')}}" width="90">
			<h5>Pilih Penyedia Jasa</h5>
		</div>
		<div class="col-md-4">
			<img src="{{url('assets/icon/3.png')}}" width="90">
			<h5>Tunggu Teknisi Datang</h5>
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

