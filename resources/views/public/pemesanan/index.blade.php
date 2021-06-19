@extends('public.layout.main')
@section('judul', 'Pemesanan')
@section('content')
<h3 class="text-center mt-3 mb-4">Pemesanan</h3>
@foreach($layanan as $item)
<div class="container">
	<div class="card-deck">
		<div class="card kotak">
			<p class="text-center font-weight-bold">Biaya Pemesanan</p>
			<table border="0" width="100%" cellpadding="5" class="tb-pemesanan">
				<tr>
					<td class="f1">Layanan</td>
					<td >:</td>
					<td>{{$item->nama_layanan}}</td>
				</tr>
				<tr>
					<td class="f1">Subtotal</td>
					<td>:</td>
					<td>Rp. {{number_format($item->harga_layanan)}}</td>
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
					<td><b>
						<?php 
						$admin = 4000;
						$ppn = 6000;
						$total = $admin+$ppn+$item->harga_layanan;
						echo number_format($total);
						?>

					</b></td>
				</tr>
			</table>
		</div>
		<div class="card kotak">
			<p class="text-center font-weight-bold">Data Konsumen</p>
			<form action="{{url('/postpemesanan')}}" method="post">
				@csrf
				<input type="hidden" name="id_user" value="{{session()->get('SessionPublic')}}">
				<input type="hidden" name="id_layanan" value="{{$item->id_layanan}}">
				<input type="hidden" name="total" value="<?php echo $total; ?>">
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input type="text" class="form-control @error('nama') is-invalid @enderror" id="staticEmail" name="nama" value="{{old('nama')}}"  autocomplete='off'>
						@error('nama')
						<div class="invalid-feedback">
							Nama Harus Diisi
						</div>
						@enderror
					</div>
				</div>


				<div class="form-group row">
					<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10">
						<textarea class="form-control @error('alamat') is-invalid @enderror" id="Alamat" name="alamat">{{old('alamat')}}</textarea>
						@error('alamat')
						<div class="invalid-feedback">
							Alamat Harus Diisi
						</div>
						@enderror
					</div>
				</div>

				<div class="form-group row">
					<label for="tel" class="col-sm-2 col-form-label">Telepon</label>
					<div class="col-sm-10">
						<input type="text" class="form-control @error('tlp') is-invalid @enderror" id="tel" name="tlp" value="{{old('tlp')}}"  autocomplete=’off’>
						@error('tlp')
						<div class="invalid-feedback">
							Telepone Harus Diisi
						</div>
						@enderror
					</div>
				</div>

				
				
			</div>
			@endforeach
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
						<input type="date" class="form-control" id="tanggal" name="tgl" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="tanggal" class="col-sm-2 col-form-label">Jam</label>
					<div class="col-sm-10">
						<input type="time" class="form-control" id="Jam" name="jam" required>
					</div>
				</div>
				
				
			</div>

		</div>
	</form>
</div>

<br>
<br>

@endsection