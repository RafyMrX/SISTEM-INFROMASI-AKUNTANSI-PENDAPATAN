@extends('public.layout.main')
@section('judul','SIA Kelompok 3')
@section('content')
<h3 class="text-center mt-3">SUVIS INDONESIA</h3>
<p class="text-center text-uppercase">Pesan sekarang layanan terbaik suvis indonesia</p>

<!-- PRODUK/LAYANAN -->
<div class="container">
 <div class="card-deck">
  @foreach($layanan as $item)
  <div class="card">
   <a href="{{url('/pemesanan')}}" >
    <img class="card-img-top" src="{{ asset('storage/'.$item->foto_layanan.'')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-center">{{$item->nama_layanan}}</h5>
      <p class="card-text"></p>
    </div>
  </a>
</div>
@endforeach
</div>
</div>
<br>
<br>
<div class="" style="background-color: #f6f6f6; padding: 30px;">	
  <div class="container justify-content-center">
   <h4 class="text-center mb-5">Cara Memesan Layanan Suvis Indonesia</h4>
   <div class="row text-center">
    <div class="col-md-4 ">
     <img src="{{url('assets/icon/1.png')}}" width="90">
     <h5>Pilih Layanan Suvis</h5>
     <p class="text-center">Pilih layanan sesuai dengan yang anda butuhkan</p>
   </div>
   <div class="col-md-4">
     <img src="{{url('assets/icon/2.png')}}" width="90">
     <h5>Pilih Penyedia Jasa</h5>
     <p class="text-center">Tentukan lokasi, pilih tanggal dan waktu Anda. Kami akan menghubungi Anda.</p>
   </div>
   <div class="col-md-4">
     <img src="{{url('assets/icon/3.png')}}" width="90">
     <h5>Tunggu Teknisi Datang</h5>
     <p class="text-center">Silahkan Duduk dan Bersantai. Teknisi berpengalaman dan berperalatan lengkap akan berada di rumah anda tepat waktu.</p>
   </div>
 </div>
</div>
</div>

<br>
<br>
<!-- ======= F.A.Q Section ======= -->
<section id="tentang" class="faq">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h3>Tentang Kami</h3>
    </div>

    <div class="row">
      <div class="col-md-6">
        <img src="{{url('assets/icon/brand.png')}}" width="166" style="margin-bottom: 10px;">
        <h4 style="color: gray;"><b>SUVIS INDONESIA</b></h4>
        <p class="text-justify">SUVIS adalah Perusahaan / Startup yang bergerak
          di bidang layanan jasa perbaikan perabot
          elektronik rumah tangga yang berkualitas
          dengan biaya yang bersaing dan bergaransi serta
          berbasis teknologi.
        </p>
      </div>
      <div class="col-md-6">
        <h4 style="color: #FF3D00;"><b>Visi</b></h4>
        <p>“Menjadi platform online home service terbaik bagi pelanggan, serta turut mensejahterakan mitra teknisi di Indonesia”</p>
        <br>

        <h4 style="color: #FF3D00;"><b>Misi</b></h4>
        <ul>
          <li> Memberikan layanan terbaik dan bernilai positif kepada pelanggan.</li>
          <li>Membuka lapangan kerja bagi masyarakat Indonesia.</li>
          <li>Menjadi penyedia jasa home service yang berkualitas dan
          terstandarisasi sesuai SOP yang berlaku.</li>
        </ul>
      </div>
    </div>

  </div>
</section><!-- End F.A.Q Section -->

<br>
<br>
<br>

<!-- AKHIR PRODUK/LAYANAN -->

@endsection

