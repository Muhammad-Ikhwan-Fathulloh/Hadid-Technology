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
				<th>Nama User</th>
				<th>Jumlah Harga</th>
				<th>Status</th>
				<th>Konfirmasi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			@foreach ($konfirmasi as $datas)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $datas->id_pesan }}</td>
					<td>{{ $datas->name }}</td>
					<td align="left">Rp.{{ number_format($datas->jumlah_harga) }},-</td>
					<td>{{ $datas->status }}</td>
					<td>{{ $datas->konfirmasi }}</td>
					<td>
						<a href="/konfirmasi/detail/{{ $datas->id_pesan }}" class="btn btn-success"><i class="fas fa-fw fa-eye"></i> Detail</a>
						<a href="/konfirmasi/cetak/{{ $datas->id_pesan }}" target="_blank" class="btn btn-info"><i class="fas fa-fw fa-print"></i> Cetak</a>
						@if($datas->konfirmasi==0)
						<a href="/setujui/{{ $datas->id_pesan }}" class="btn btn-warning"><i class="fas fa-fw fa-check"></i> Setujui</a>
						@elseif($datas->konfirmasi==1)
						<a href="/batalkan/{{ $datas->id_pesan }}" class="btn btn-danger"><i class="fas fa-fw fa-check"></i> Batalkan</a>
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
	  </div>
	</div>
@endsection
