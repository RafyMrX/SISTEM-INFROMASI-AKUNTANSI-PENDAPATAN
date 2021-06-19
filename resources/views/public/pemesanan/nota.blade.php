@extends('public.layout.main')
@section('judul', 'Pemesanan')
@section('content')
<h3 class="text-center mt-3 mb-4">Nota Pemesanan</h3>

<div class="container">
	<div class="card-deck">
		<div class="card kotak" style="padding: 20px;">
			<h3 style="border-bottom: 1px solid #bababa;padding-bottom: 4px; color: orange;" class="text-uppercase">Suvis Indonesia</h3>
		@foreach($pemesanan as $item)
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
				<table >
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
			<div class="col-md-8">
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
				      <td  class="v">{{$item->Layanan['nama_layanan']}}</td>
				    </tr>
				    <tr>
				      <td>Waktu Kunjungan</td>
				      <td>:</td>
				      <td  class="v">{{date('d-F-Y', strtotime($item->waktu_kunjungan))}}</td>
				    </tr>

				     <tr>
				      <td>Alamat</td>
				      <td>:</td>
				      <td  class="v">{{$item->alamat_pemesanan}}</td>
				    </tr>

				     <tr>
				      <td>Subtotal</td>
				      <td>:</td>
				      <td  class="v">Rp.{{number_format($item->Layanan['harga_layanan'])}}</td>
				    </tr>

				     <tr>
				      <td>Biaya Admin</td>
				      <td>:</td>
				      <td  class="v">Rp.4.000</td>
				    </tr>

				     <tr>
				      <td>Pajak PPN</td>
				      <td>:</td>
				      <td  class="v">Rp.6.000</td>
				    </tr>

				     <tr>
				      <td><b>Total</b></td>
				      <td>:</td>
				      <td  class="v"><b>Rp.{{number_format($item->total)}}</b></td>
				    </tr>
				  </tbody>
				</table>
			</div>

			<div class="col-md-4">
				<div class="kotak">
					<p class="text-center">Silahkan Lakukan Pembayaran <b>Rp.{{number_format($item->total)}}</b></p>

					<p class="text-center">ke Bank BNI <b>102-13646464-12</b></p>

					<p class="text-center">AN Reza Rahardian</p>
				</div>
			</div>
		</div>

		</div>
@endforeach

	</div>
</div>
<br>
<br>
@endsection