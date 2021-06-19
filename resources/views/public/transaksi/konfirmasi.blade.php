@extends('public.layout.main')
@section('judul', 'Transaksi')
@section('content')
<div class="container">
<h3 class="mt-3 mb-4">Konfirmasi Pembayaran</h3>
<p>Kirim bukti pembayaran anda disini</p>


	@foreach($pemesanan as $item)
	<h5  style="border: 1px solid #000; padding: 10px; width: 290px; font-weight: bold;">Total Tagihan Anda Rp.{{number_format($item->total)}}</h5>
	<br>
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
		<div class="card-deck">
		<div class="card kotak" style="padding: 20px;">
			<h5 class="text-center">Data Pemesanan</h5>
			<table>
				<tr>
					<td>ID Layanan</td>
					<td>:</td>
					<td>{{$item->id_layanan}}</td>
				</tr>
				<tr>
					<td>Nama Layanan</td>
					<td>:</td>
					<td>{{$item->Layanan['nama_layanan']}}</td>
				</tr>
				<tr>
					<td>Waktu Kunjungan</td>
					<td>:</td>
					<td>{{date('d-F-Y', strtotime($item->waktu_kunjungan))}}</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td>{{$item->alamat_pemesanan}}</td>
				</tr>
			</table>
		</div>
	</div>
<br>
<form action="{{url('/kirimbukti')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<div class="col-md-6">
			
			<div class="form-group">
				<label><b>Foto Bukti</b></label>
				<input type="file" name="bukti" class="form-control">
				<small id="emailHelp" class="form-text text-muted">Foto Bukti Harus Format JPG dan Ukuran Maks 1 MB</small>
			</div>
		</div>
		<div class="col-md-6">
			<br>
			<input type="submit" class="btn btn-success btn-block" name="" value="Kirim" style="margin-top: 11px;">
		</div>
	</div>
</form>
</div>
@endforeach
@endsection