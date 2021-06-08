@extends('layout.v_template')

@section('title','Transaksi')
@section('halaman','Transaksi')

@section('content')
<div class="card border-primary mb-3">
	  <div class="card-body">
	  	<h3><i class="fas fa-fw fa-check"></i> Riwayat Transaksi</h3>

	  	<div class="table-responsive">
	<table class="table">
		<thead class="table-light">
			<tr>
				<th>No</th>
				<th>ID Pesan</th>
				<th>Jumlah Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			@foreach ($transaksis as $datas)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $datas->id_pesan }}</td>
					<td align="left">Rp.{{ number_format($datas->jumlah_harga) }},-</td>
					<td>
						<a href="/transaksi/detail/{{ $datas->id_pesan }}" class="btn btn-success"><i class="fas fa-fw fa-eye"></i> Detail</a>
						<a href="/transaksi/cetak/{{ $datas->id_pesan }}" target="_blank" class="btn btn-info"><i class="fas fa-fw fa-print"></i> Cetak</a>
						<!-- <a href="/transaksi/pdf/{{ $datas->id_pesan }}" target="_blank" class="btn btn-danger"><i class="fas fa-fw fa-print"></i> PDF</a> -->
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
	  </div>
	</div>
@endsection
