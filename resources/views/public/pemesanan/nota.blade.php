@extends('public.layout.main')
@section('judul', 'Pemesanan')
@section('content')
<h3 class="text-center mt-3 mb-4">Nota Pemesanan</h3>

<div class="container">
	<div class="card-deck">
		<div class="card kotak" style="padding: 20px;">
			<h3 style="border-bottom: 1px solid #bababa;padding-bottom: 4px; color: orange;" class="text-uppercase">Suvis Indonesia</h3>
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

		<p style="font-size: 13pt" class="font-weight-bold text-center">Data Pemesanan</p>

		<div class="row">
			<div class="col-md-8">
				<table class="table table-striped">
				  <tbody>
				    <tr>
				      <td>ID Layanan</td>
				      <td>:</td>
				      <td class="v">L02</td>
				    </tr>
				    <tr>
				      <td>Nama Layanan</td>
				      <td>:</td>
				      <td  class="v">Service AC</td>
				    </tr>
				    <tr>
				      <td>Waktu Kunjungan</td>
				      <td>:</td>
				      <td  class="v">21 April 2021 11.00</td>
				    </tr>

				     <tr>
				      <td>Alamat</td>
				      <td>:</td>
				      <td  class="v">Jl.Tanah Merah Indah 1</td>
				    </tr>

				     <tr>
				      <td>Subtotal</td>
				      <td>:</td>
				      <td  class="v">Rp.60.000</td>
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
				      <td  class="v"><b>Rp.70.000</b></td>
				    </tr>
				  </tbody>
				</table>
			</div>

			<div class="col-md-4">
				<div class="kotak">
					<p class="text-center">Silahkan Lakukan Pembayaran <b>Rp. 70.000</b></p>

					<p class="text-center">ke Bank BNI <b>102-13646464-12</b></p>

					<p class="text-center">AN Reza Rahardian</p>
				</div>
			</div>
		</div>

		</div>


	</div>
</div>
<br>
<br>
@endsection