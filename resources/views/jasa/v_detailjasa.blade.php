@extends('layout.v_template')

@section('title','Jasa')
@section('halaman','Jasa')

@section('content')
	<table class="table text-white">
	<tr>
		<th><width="30px">ID Jasa</th>
		<th>:</th>
		<th>{{$detail->id_jasa}}</th>
	</tr>
	<tr>
		<th><width="30px">QR Code</th>
		<th>:</th>
		<td>
			<div class="visible-print text-center">
			    {!! QrCode::size(150)->generate($detail->id_jasa); !!}
			    <p>{{$detail->materi_jasa}}</p>
			</div>
		</td>
	</tr>
	<tr>
		<th><width="30px">Materi Jasa</th>
		<th>:</th>
		<th>{{$detail->materi_jasa}}</th>
	</tr>
	<tr>
		<th><width="30px">Gambar Jasa</th>
		<th>:</th>
		<th>
			<div class="visible-print text-center">
				<img src="{{ url('g_jasa/'.$detail->gambar_jasa) }}" width="200px">
				<p>{{$detail->gambar_jasa}}</p>
			</div>
		</th>
	</tr>
	<tr>
		<th><width="30px">Keterangan Jasa</th>
		<th>:</th>
		<th>{{$detail->keterangan_jasa}}</th>
	</tr>
	<tr>
		<th><width="30px">Kategori Jasa</th>
		<th>:</th>
		<th>{{$detail->kategori_jasa}}</th>
	</tr>
	<tr>
		<th><width="30px">Harga Jasa</th>
		<th>:</th>
		<th>{{$detail->harga_jasa}}</th>
	</tr>
	<tr>
		<th><width="30px">Instruktur Jasa</th>
		<th>:</th>
		<th>{{$detail->instruktur_jasa}}</th>
	</tr>
	<tr>
		<th><width="30px">Tanggal</th>
		<th>:</th>
		<th>{{$detail->tanggal}}</th>
	</tr>
@endsection