@extends('public.layout.main')
@section('judul', 'Pemesanan')
@section('content')
<h3 class="text-center mt-3 mb-4">Pemesanan</h3>

<div class="container">
	<div class="card-deck">
		<div class="card kotak">
			<p class="text-center font-weight-bold">Biaya Pemesanan</p>
			<table border="0" width="100%" cellpadding="5" class="tb-pemesanan">
				<tr>
					<td class="f1">Layanan</td>
					<td >:</td>
					<td>Service AC</td>
				</tr>
				<tr>
					<td class="f1">Subtotal</td>
					<td>:</td>
					<td>Rp.60.000</td>
				</tr>
				<tr>
					<td class="f1">Biaya Admin</td>
					<td>:</td>
					<td>Rp.4.000</td>
				</tr>
				<tr>
					<td class="f1">Pajak PPN</td>
					<td>:</td>
					<td>Rp.6.000</td>
				</tr>
				<tr>
					<td class="f1"><b>Total</b></td>
					<td>:</td>
					<td><b>Rp.70.000</b></td>
				</tr>
			</table>
		</div>
		<div class="card kotak">
			<p class="text-center font-weight-bold">Data Konsumen</p>
			<form action="{{url('/nota-pemesanan')}}" method="">

				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="staticEmail">
					</div>
				</div>


				<div class="form-group row">
					<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="Alamat"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label for="tel" class="col-sm-2 col-form-label">Telepon</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tel">
					</div>
				</div>

				
				
			</div>
		</div>

		<br>

		<div class="card-deck">
			<div class="card syarat">
				<p class="text-left font-weight-bold">Syarat dan Ketentuan</p>
				<p>Tarif diatas merupakan biaya minimum jasa SUVIS INDONESIA yaitu peprbaikan standar (Inspeksi dan perbaikan ringan). Untuk pekerjaan selain perbaikan standar seperti ganti sparepart, mitra Suvis akan mengajukan penawaran harga diluar aplikasi.</p>
				<p>Dengan menekan tombol "Lanjut", saya menyetujui Syarat dan Ketentuan yang berlaku</p>

				<input type="submit" class="btn btn-success btn-block " value="Lanjut" @if(!session()->has('SessionPublic')) disabled @endif>

				@if(!session()->has('SessionPublic'))
				<div style="color: red;">
					Login Terlebih dahulu untuk melakukan pemesanan
				</div>
				@endif
			</div>

			<div class="card kotak">
				<p class="text-center font-weight-bold">Waktu Kunjungan</p>
				<div class="form-group row">
					<label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="tanggal">
					</div>
				</div>

				<div class="form-group row">
					<label for="tanggal" class="col-sm-2 col-form-label">Jam</label>
					<div class="col-sm-10">
						<input type="time" class="form-control" id="Jam">
					</div>
				</div>
				
				
			</div>

		</div>
	</form>
</div>

<br>
<br>

@endsection