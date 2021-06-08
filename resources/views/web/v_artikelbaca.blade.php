@extends('layout.v_template')

@section('title','Artikel')
@section('halaman','Artikel')

@section('content')
<div class="card border-primary mb-3">
	  <div class="card-body">
	  	<table class="table">
	 <tr>
		<h2><strong>{{$detail->judul_artikel}}</strong></h2>
	</tr>
	<tr>
		<p>{{$detail->tanggal}}</p>
	</tr>
	<tr>
		<div class="visible-print text-center">
				<img src="{{ url('g_artikel/'.$detail->gambar_artikel) }}" width="800px">
			</div>
	</tr>
	<br>
	<tr>
		<p><b>Penulis :</b> {{$detail->penulis_artikel}}</p>
	</tr>
	<hr>
	<tr>
		<p>{{$detail->isi_artikel}}</p>
	</tr>
	<hr>
	<tr>
		<p><b>Kategori :</b> {{$detail->kategori_artikel}}</p>
	</tr>
	<tr>
		<p><b>Keterangan :</b> {{$detail->keterangan_artikel}}</p>
	</tr>
	  </div>
	</div>
@endsection