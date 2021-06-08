@extends('layout.v_template')

@section('title','Produk')
@section('halaman','Produk')

@section('content')
	<div class="card border-primary mb-3">
	  <div class="card-body">
	  	<a href="/produk/add" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-plus-circle"></i> Tambah Data</a>
	<br>
	  	<br>
	  	<form class="d-flex" action="/produk/search" method="GET">
	      <input class="form-control me-2" type="text" name="cari" placeholder="Search" aria-label="Search" value="{{ old('cari') }}">
	      <button class="btn btn-outline-primary" type="submit" value="cari"><i class="fas fa-fw fa-search"></i></button>
	    </form>
	<br>

	@if(session('pesan'))
		<div class="alert alert-success" role="alert">
	{{session('pesan')}}
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	@endif
	  	<div class="table-responsive">
	<table class="table">
		<thead class="table-light">
			<tr>
				<th>No</th>
				<th>ID Produk</th>
				<th>QR Code</th>
				<th>Nama Produk</th>
				<th>Gambar Produk</th>
				<th>Harga Beli Produk</th>
				<th>Harga Jual Produk</th>
				<th>Stok Produk</th>
				<th>Keterangan Produk</th>
				<th>Tanggal</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			@foreach ($produk as $datas)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $datas->id_produk }}</td>
					<td>
						<div class="visible-print text-center">
						    {!! QrCode::size(100)->generate($datas->id_produk); !!}
						    
						</div>
					</td>
					<td>{{ $datas->nama_produk }}</td>
					<td><img src="{{ url('g_produk/'.$datas->gambar_produk) }}" width="100px"></td>
					<td align="left">Rp.{{ number_format($datas->hargabeli_produk) }},-</td>
					<td align="left">Rp.{{ number_format($datas->hargajual_produk) }},-</td>
					<td>{{ $datas->stok_produk }} pcs</td>
					<td>{{ $datas->keterangan_produk }}</td>
					<td>{{ $datas->tanggal_produk }}</td>
					<td>
						<a href="/produk/detail/{{$datas->id_produk}}" class="btn btn-sm btn-success"><i class="fas fa-fw fa-eye"></i> Lihat</a>
						<br>
						<br>
						<a href="/produk/edit/{{$datas->id_produk}}" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pen"></i> Ubah</a>
						<br>
						<br>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$datas->id_produk}}"><i class="fas fa-fw fa-trash"></i> Hapus</button>

					</td>
				</tr>
			@endforeach


		</tbody>
	</table>

	<!-- Modal -->
@foreach($produk as $datas)
<div class="modal modal-danger fade" id="delete{{$datas->id_produk}}">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $datas->nama_produk }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus data ini ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="/produk/delete/{{$datas->id_produk}}" class="btn btn-danger">Ya</a>
      </div>
    </div>
  </div>
</div>
@endforeach

	</div>
	<br>
	{{ $produk->links() }}
	</div>
	</div>
@endsection
