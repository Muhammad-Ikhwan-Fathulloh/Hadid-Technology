@extends('layout.v_template')

@section('title','Check Out')
@section('halaman','Check Out')

@section('content')
<div class="card border-primary mb-3">
	  <div class="card-body">
	  	<h3><i class="fas fa-fw fa-shopping-cart"></i> Check Out <span class="badge bg-danger text-white">{{ $notifk }}</span></h3>
	  	@if(!empty($totalpesan))
	  	<p align="right"><b>Tanggal Pesan :</b> {{$totalpesan->tanggal}}</p>

	  	<div class="table-responsive">
	<table class="table">
		<thead class="table-light">
			<tr>
				<th>No</th>
				<th>Nama Produk</th>
				<th>Jumlah</th>
				<th>Harga Produk</th>
				<th>Total Harga</th>	
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			@foreach ($produk_detail as $datas)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $datas->nama_produk }}</td>
					<td>{{ $datas->jumlah }}</td>
					<td align="left">Rp.{{ number_format($datas->hargajual_produk) }},-</td>
					<td align="left">Rp.{{ number_format($datas->jumlah_harga) }},-</td>
					<td>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$datas->id_pesanan}}"><i class="fas fa-fw fa-trash"></i> Batal</button>
					</td>
				</tr>
			@endforeach
			@if((!empty($datas)))
			<tr>
				<td colspan="4"></td>
				<td>Rp. {{number_format($totalpesan->jumlah_harga)}},-</td>
				<td>
					<a href="/konfirmasi/transaksi/{{ $datas->id_produk }}" class="btn btn-success"><i class="fas fa-fw fa-shopping-cart"></i> Check Out</a>
				</td>
			</tr>
			@endif
		</tbody>
	</table>
@else
<div class="table-responsive">
	<table class="table">
		<thead class="table-light">
			<tr>
				<th>No</th>
				<th>Nama Produk</th>
				<th>Jumlah</th>
				<th>Harga Produk</th>
				<th>Total Harga</th>	
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<h3 class="btn btn-danger">Silahkan masukkan produk ke keranjang!</h3>
		</tbody>
	</table>
@endif
@foreach($produk_detail as $datas)
<div class="modal modal-danger fade" id="delete{{$datas->id_pesanan}}">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $datas->nama_produk }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin membatalkan pesanan ini ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="/pesanan/delete/{{$datas->id_pesanan}}" class="btn btn-danger">Ya</a>
      </div>
    </div>
  </div>
</div>
@endforeach


	</div>
	</div>
	</div>
@endsection