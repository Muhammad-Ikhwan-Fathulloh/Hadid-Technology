@extends('layout.v_template')

@section('title','Artikel')
@section('halaman','Artikel')

@section('content')
	<form action="/artikel/insert" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="content">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label>ID Artikel</label>
						<input type="text" name="id_artikel" class="form-control" value="{{old('id_artikel')}}">
						<div class="text-danger">
						    @error('id_artikel') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Judul Artikel</label>
						<input type="text" name="judul_artikel" class="form-control" value="{{old('judul_artikel')}}">
						<div class="text-danger">
						    @error('judul_artikel') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Gambar Artikel</label>
						<input type="file" name="gambar_artikel" class="form-control" value="{{old('gambar_artikel')}}">
						<div class="text-danger">
						    @error('gambar_artikel') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Kategori Artikel</label>
						<input type="text" name="kategori_artikel" class="form-control" value="{{old('kategori_artikel')}}">
						<div class="text-danger">
						    @error('kategori_artikel') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Keterangan Artikel</label>
						<input type="text" name="keterangan_artikel" class="form-control" value="{{old('keterangan_artikel')}}">
						<div class="text-danger">
						    @error('keterangan_artikel') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Penulis Artikel</label>
						<input type="text" name="penulis_artikel" class="form-control" value="{{old('penulis_artikel')}}">
						<div class="text-danger">
						    @error('penulis_artikel') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Isi Artikel</label>
						<input type="text" name="isi_artikel" class="form-control" value="{{old('isi_artikel')}}">
						<div class="text-danger">
						    @error('isi_artikel') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<button class="btn btn-primary btn-sm">Simpan</button>
					</div>

				</div>
			</div>
		</div>
	</form>
@endsection