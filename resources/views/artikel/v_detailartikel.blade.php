@extends('layout.v_template')

@section('title','Artikel')
@section('halaman','Artikel')

@section('content')
	<table class="table text-white">
	<tr>
		<th><width="30px">ID Artikel</th>
		<th>:</th>
		<th>{{$detail->id_artikel}}</th>
	</tr>
	<tr>
		<th><width="30px">QR Code</th>
		<th>:</th>
		<td>
			<div class="visible-print text-center">
			    {!! QrCode::size(150)->generate($detail->id_artikel); !!}
			    <p>{{$detail->judul_artikel}}</p>
			</div>
		</td>
	</tr>
	<tr>
		<th><width="30px">Judul Artikel</th>
		<th>:</th>
		<th>{{$detail->judul_artikel}}</th>
	</tr>
	<tr>
		<th><width="30px">Gambar Artikel</th>
		<th>:</th>
		<th>
			<div class="visible-print text-center">
				<img src="{{ url('g_artikel/'.$detail->gambar_artikel) }}" width="200px">
				<p>{{$detail->gambar_artikel}}</p>
			</div>
		</th>
	</tr>
	<tr>
		<th><width="30px">Kategori Artikel</th>
		<th>:</th>
		<th>{{$detail->kategori_artikel}}</th>
	</tr>
	<tr>
		<th><width="30px">Keterangan Artikel</th>
		<th>:</th>
		<th>{{$detail->keterangan_artikel}}</th>
	</tr>
	<tr>
		<th><width="30px">Penulis Artikel</th>
		<th>:</th>
		<th>{{$detail->penulis_artikel}}</th>
	</tr>
	<tr>
		<th><width="30px">Isi Artikel</th>
		<th>:</th>
		<th>{{$detail->isi_artikel}}</th>
	</tr>
	<tr>
		<th><width="30px">Tanggal</th>
		<th>:</th>
		<th>{{$detail->tanggal}}</th>
	</tr>
@endsection