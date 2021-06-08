@extends('layout.v_template')

@section('title','Artikel')
@section('halaman','Artikel')

@section('content')
	<div class="card border-primary mb-3">
	  <div class="card-body">
	  	<a href="/artikel/add" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-plus-circle"></i> Tambah Data</a>
	<br>
	  	<br>
	  	<form class="d-flex" action="/artikel/search" method="GET">
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
				<th>ID Artikel</th>
				<th>QR Code</th>
				<th>Judul Artikel</th>
				<th>Gambar Artikel</th>	
				<th>Kategori Artikel</th>
				<th>Keterangan Artikel</th>
				<th>Penulis Artikel</th>
				<th>Tanggal</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			@foreach ($artikel as $datas)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $datas->id_artikel }}</td>
					<td>
						<div class="visible-print text-center">
						    {!! QrCode::size(100)->generate($datas->id_artikel); !!}
						    
						</div>
					</td>
					<td>{{ $datas->judul_artikel }}</td>
					<td><img src="{{ url('g_artikel/'.$datas->gambar_artikel) }}" width="100px"></td>
					<td>{{ $datas->kategori_artikel }}</td>
					<td>{{ $datas->keterangan_artikel }}</td>
					<td>{{ $datas->penulis_artikel }}</td>
					<td>{{ $datas->tanggal }}</td>
					<td>
						<a href="/artikel/detail/{{$datas->id_artikel}}" class="btn btn-sm btn-success"><i class="fas fa-fw fa-eye"></i> Lihat</a>
						<br>
						<br>
						<a href="/artikel/edit/{{$datas->id_artikel}}" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pen"></i> Ubah</a>
						<br>
						<br>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$datas->id_artikel}}"><i class="fas fa-fw fa-trash"></i> Hapus</button>

					</td>
				</tr>
			@endforeach


		</tbody>
	</table>

	<!-- Modal -->
@foreach($artikel as $datas)
<div class="modal modal-danger fade" id="delete{{$datas->id_artikel}}">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $datas->judul_artikel }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus data ini ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="/artikel/delete/{{$datas->id_artikel}}" class="btn btn-danger">Ya</a>
      </div>
    </div>
  </div>
</div>
@endforeach

	</div>
	<br>
	{{ $artikel->links() }}
	</div>
	</div>
@endsection
