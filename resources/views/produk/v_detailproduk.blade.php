@extends('layout.v_template')

@section('title','Lihat Produk')
@section('halaman','Lihat Produk')

@section('content')
	<table class="table text-white">
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
			    <p>{{$detail->nama_produk}}</p>
			</div>
		</td>
	</tr>
	<tr>
		<th><width="30px">Nama Produk</th>
		<th>:</th>
		<th>{{$detail->nama_produk}}</th>
	</tr>
	<tr>
		<th><width="30px">Gambar Produk</th>
		<th>:</th>
		<th>
			<div class="visible-print text-center">
				<img src="{{ url('g_produk/'.$detail->gambar_produk) }}" width="200px">
				<p>{{$detail->gambar_produk}}</p>
			</div>
		</th>
	</tr>
	
	<tr>
		<th><width="30px">Harga Beli Produk</th>
		<th>:</th>
		<th>Rp.{{$detail->hargabeli_produk}},-</th>
	</tr>
	<tr>
		<th><width="30px">Harga Jual Produk</th>
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
		<th><width="30px">Tanggal</th>
		<th>:</th>
		<th>{{$detail->tanggal_produk}}</th>
	</tr>
@endsection