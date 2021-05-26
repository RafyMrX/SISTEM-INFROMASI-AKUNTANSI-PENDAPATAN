@extends('public.layout.main')
@section('judul', 'Transaksi')
@section('content')
<div class="container">
<h3 class="mt-3 mb-4">Konfirmasi Pembayaran</h3>
<p>Kirim bukti pembayaran anda disini</p>


	<h5  style="border: 1px solid #000; padding: 10px; width: 272px; font-weight: bold;">Total Tagihan Anda Rp.70.000</h5>
	<br>
	<div class="row">
			<div class="col-md-6">
				<p style="font-size: 13pt" class="font-weight-bold">Pemesanan</p>
				<table>
					<tr>
						<td><b>ID</b></td>
						<td></td>
						<td></td>
						<td>P01HS12311</td>
					</tr>
					<tr>
						<td><b>Tanggal</b></td>
						<td></td>
						<td></td>
						<td>20-04-2021 07.16</td>
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
						<td>K01021</td>
					</tr>
					<tr>
						<td><b>Nama</b></td>
						<td></td>
						<td></td>
						<td>Afif Fathurrahman</td>
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
					<td>L02</td>
				</tr>
				<tr>
					<td>Nama Layanan</td>
					<td>:</td>
					<td>Service AC</td>
				</tr>
				<tr>
					<td>Waktu Kunjungan</td>
					<td>:</td>
					<td>21 April 2021 17.00</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td>Jl.Tanah Merah Indah 1</td>
				</tr>
			</table>
		</div>
	</div>
<br>
<form>
	<div class="row">
		<div class="col-md-6">
			
			<div class="form-group">
				<label><b>Foto Bukti</b></label>
				<input type="file" name="bukti" class="form-control">
				<small id="emailHelp" class="form-text text-muted">Foto Bukti Harus Format JPG dan Ukuran Maks 10 MB</small>
			</div>
		</div>
		<div class="col-md-6">
			<br>
			<input type="submit" class="btn btn-success btn-block" name="" value="Kirim">
		</div>
	</div>
</form>
</div>

@endsection