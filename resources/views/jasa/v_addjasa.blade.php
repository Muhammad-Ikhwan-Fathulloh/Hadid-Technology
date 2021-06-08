@extends('layout.v_template')

@section('title','Jasa')
@section('halaman','Jasa')

@section('content')
	<form action="/jasa/insert" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="content">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label>ID Jasa</label>
						<input type="text" name="id_jasa" class="form-control" value="{{old('id_jasa')}}">
						<div class="text-danger">
						    @error('id_jasa') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Materi Jasa</label>
						<input type="text" name="materi_jasa" class="form-control" value="{{old('materi_jasa')}}">
						<div class="text-danger">
						    @error('materi_jasa') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Gambar Jasa</label>
						<input type="file" name="gambar_jasa" class="form-control" value="{{old('gambar_jasa')}}">
						<div class="text-danger">
						    @error('gambar_jasa') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Keterangan Jasa</label>
						<input type="text" name="keterangan_jasa" class="form-control" value="{{old('keterangan_jasa')}}">
						<div class="text-danger">
						    @error('keterangan_jasa') 
						    	{{$message}}
						    @enderror
						</div>
					</div>


					<div class="form-group">
						<label>Kategori Jasa</label>
						<input type="text" name="kategori_jasa" class="form-control" value="{{old('kategori_jasa')}}">
						<div class="text-danger">
						    @error('kategori_jasa') 
						    	{{$message}}
						    @enderror
						</div>
					</div>
					
					<div class="form-group">
						<label>Harga Jasa</label>
						<input type="text" name="harga_jasa" class="form-control" value="{{old('harga_jasa')}}">
						<div class="text-danger">
						    @error('harga_jasa') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Instrukur Jasa</label>
						<input type="text" name="instruktur_jasa" class="form-control" value="{{old('instruktur_jasa')}}">
						<div class="text-danger">
						    @error('instruktur_jasa') 
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