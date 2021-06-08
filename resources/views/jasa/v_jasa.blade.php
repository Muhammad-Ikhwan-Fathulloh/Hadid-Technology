@extends('layout.v_template')

@section('title','Jasa')
@section('halaman','Jasa')

@section('content')
	<div class="card border-primary mb-3">
	  <div class="card-body">
	  	<a href="/jasa/add" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-plus-circle"></i> Tambah Data</a>
	<br>
	  	<br>
	  	<form class="d-flex" action="/jasa/search" method="GET">
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
				<th>ID Jasa</th>
				<th>QR Code</th>
				<th>Materi Jasa</th>
				<th>Gambar Jasa</th>
				<th>Keterangan Jasa</th>
				<th>Kategori Jasa</th>
				<th>Harga Jasa</th>
				<th>Instruktur Jasa</th>
				<th>Tanggal</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			@foreach ($jasa as $datas)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $datas->id_jasa }}</td>
					<td>
						<div class="visible-print text-center">
						    {!! QrCode::size(100)->generate($datas->id_jasa); !!}
						    
						</div>
					</td>
					<td>{{ $datas->materi_jasa }}</td>
					<td><img src="{{ url('g_jasa/'.$datas->gambar_jasa) }}" width="100px"></td>
					<td>{{ $datas->keterangan_jasa }}</td>
					<td>{{ $datas->kategori_jasa }}</td>
					<td>Rp.{{ $datas->harga_jasa }},-</td>
					<td>{{ $datas->instruktur_jasa }}</td>
					<td>{{ $datas->tanggal }}</td>
					<td>
						<a href="/jasa/detail/{{$datas->id_jasa}}" class="btn btn-sm btn-success"><i class="fas fa-fw fa-eye"></i> Lihat</a>
						<br>
						<br>
						<a href="/jasa/edit/{{$datas->id_jasa}}" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pen"></i> Ubah</a>
						<br>
						<br>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$datas->id_jasa}}"><i class="fas fa-fw fa-trash"></i> Hapus</button>

					</td>
				</tr>
			@endforeach


		</tbody>
	</table>

	<!-- Modal -->
@foreach($jasa as $datas)
<div class="modal modal-danger fade" id="delete{{$datas->id_jasa}}">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $datas->materi_jasa }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus data ini ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="/jasa/delete/{{$datas->id_jasa}}" class="btn btn-danger">Ya</a>
      </div>
    </div>
  </div>
</div>
@endforeach

	</div>
	<br>
	{{ $jasa->links() }}
	</div>
	</div>
@endsection
