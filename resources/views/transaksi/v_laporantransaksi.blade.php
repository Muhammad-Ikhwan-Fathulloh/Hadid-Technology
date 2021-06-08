@extends('layout.v_template')

@section('title','Riwayat Transaksi')
@section('halaman','Riwayat Transaksi')

@section('content')
<div class="card border-primary mb-3">
	  <div class="card-body">
	  	<h3><i class="fas fa-fw fa-check"></i> Laporan Transaksi</h3>
	  	<form action="/laporan/cetak" method="GET" enctype="multipart/form-data">
	  		<div class="row">
	  			<div class="form-group">
	  			<label><strong>Tanggal Awal :</strong></label>
	  			<input type="date" name="tgl_awal" class="form-control" id="tgl_awal" autocomplete="off" value="{{ date('Y-m-d')}}">
	  		</div>
	  		<div class="form-group">
	  			<button type="submit" class="btn btn-white"></button>
	  		</div>
	  		<div class="form-group">
	  			<label><strong>Tanggal Akhir :</strong></label>
	  			<input type="date" name="tgl_akhir" class="form-control" id="tgl_akhir" autocomplete="off" value="{{ date('Y-m-d')}}">
	  		</div>
	  		</div>
	  		<div class="row">
	  		<div class="form-group">
	  			<a href="/riwayattransaksi" class="btn btn-warning"><i class="fas fa-fw fa-circle"></i> Refresh</a>
	  		</div>
	  		<div class="form-group">
	  			<button type="submit" class="btn btn-white"></button>
	  		</div>
	  		<div class="form-group">
	  			<button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-check"></i> Cek</button>
	  		</div>
	  		<div class="form-group">
	  			<button type="submit" class="btn btn-white"></button>
	  		</div>
	  		<div class="form-group">
	  			<a href="/laporan/keuangan" target="_blank" class="btn btn-info"><i class="fas fa-fw fa-print"></i> Cetak</a>
	  		</div>
	  		</div>
	  	</form>
	  	<div class="table-responsive">
	<table class="table">
		<thead class="table-light">
			<tr>
				<th>No</th>
				<th>ID Pesanan</th>
				<th>Nama Produk</th>
				<th>Harga Produk</th>
				<th>ID Pesan</th>
				<th>Jumlah</th>
				<th>Jumlah Harga</th>
				<th>Tanggal</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			@foreach ($transaksi as $datas)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $datas->id_pesanan }}</td>
					<td>{{ $datas->nama_produk }}</td>
					<td align="left">Rp.{{ number_format($datas->hargajual_produk) }},-</td>
					<td>{{ $datas->id_pesan }}</td>
					<td>{{ $datas->jumlah }}</td>
					<td align="left">Rp.{{ number_format($datas->jumlah_harga) }},-</td>
					<td>{{ $datas->tanggal }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
	  </div>
	</div>
@endsection
