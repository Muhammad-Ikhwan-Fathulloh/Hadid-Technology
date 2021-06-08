@extends('layout.v_template')

@section('title','Check In')
@section('halaman','Check In')

@section('content')
<br>
<h4 class="text-white"><i class="fas fa-fw fa-tasks"></i>Pesan Produk</h4>
<hr>
<div class="card border-primary mb-3">
	  <div class="card-body">
	<table class="table text-dark">
	<tr>
		<th><width="30px">Gambar Produk</th>
		<th>:</th>
		<th>
			<div class="visible-print text-center">
				<img src="{{ url('g_produk/'.$detail->gambar_produk) }}" width="200px">
				<!-- <p>{{$detail->gambar_produk}}</p> -->
			</div>
		</th>
	</tr>
	<tr>
		<th><width="30px">ID Produk</th>
		<th>:</th>
		<th>{{$detail->id_produk}}</th>
	</tr>
	<tr>
		<th><width="30px">QR Code</th>
		<th>:</th>
		<td>
			<div class="visible-print text-center">
			    {!! QrCode::size(150)->generate($detail->id_produk); !!}
			    <!-- <p>{{$detail->nama_produk}}</p> -->
			</div>
		</td>
	</tr>
	<tr>
		<th><width="30px">Nama Produk</th>
		<th>:</th>
		<th>{{$detail->nama_produk}}</th>
	</tr>
	
	<tr>
		<th><width="30px">Harga Produk</th>
		<th>:</th>
		<th>Rp.{{$detail->hargajual_produk}},-</th>
	</tr>
	<tr>
		<th><width="30px">Stok Produk</th>
		<th>:</th>
		<th>{{$detail->stok_produk}} pcs</th>
	</tr>
	<tr>
		<th><width="30px">Keterangan Produk</th>
		<th>:</th>
		<th>{{$detail->keterangan_produk}}</th>
	</tr>
	<tr>
		<th><width="30px">Jumlah Pesan</th>
		<th>:</th>
		<th>
			<form method="POST" action="/pesan/insert/{{$detail->id_produk}}" enctype="multipart/form-data">
			@csrf
			<input type="text" name="jumlah_pesan" class="form-control" value="">
			<br>
			<button type="submit" class="btn btn-success"><i class="fas fa-fw fa-shopping-cart"></i> Masukkan Keranjang</button>
			</form>
		</th>
	</tr>
</div>
</div>
<hr>
@endsection