@extends('web.v_web')

@section('title','Web')
@section('halaman','Dashboard')

@section('content1')
<br>
<h4 class="text-white"><i class="fas fa-fw fa-tasks"></i> Komponen dan Produk</h4>
<hr>
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach ($produk as $datas)
<div class="col">
	<div class="card bg-ku">
      <img src="{{ url('g_produk/'.$datas->gambar_produk) }}" class="card-img-top rounded-circle" width="200px">
      <div class="card-body">
        <h5 class="card-title text-white"><b>{{ $datas->nama_produk }}</b></h5>
        <hr class="text-white">
        <div class="text-white">
        <tr>
          <p><b>Harga Produk :</b> Rp.{{ number_format($datas->hargajual_produk) }},-</p>
          <!-- <a href="" class="btn btn-info">Rp.{{ $datas->hargajual_produk }},-</a> -->
          <!-- <th>Rp.{{ $datas->hargajual_produk }},-</th> -->
        </tr>
        <tr>
          <p><b>Stok Produk :</b> {{ $datas->stok_produk }} pcs</p>
          <!-- <a href="" class="btn btn-warning">{{ $datas->stok_produk }} pcs</a> -->
          <!-- <th>{{ $datas->stok_produk }} pcs</th> -->
        </tr>
        <hr>
       	<tr>
          <p><b>Keterangan Produk :</b></p>
	       <th>{{ $datas->keterangan_produk }}</th>
	      </tr>
        <hr>
        <tr>
          <a href="/pesan/detail/{{$datas->id_produk}}" class="btn btn-success"><i class="fas fa-fw fa-shopping-cart"></i> Pesan</a>
        </tr>
        <br>
        
        </div>
        
      </div>
      <!-- <div class="card-footer">
        <small class="text-muted text-dark">{{ $datas->tanggal_produk }}</small>
      </div> -->
    </div>
</div>
@endforeach
</div>
@endsection

@section('content2')
<br>
<h4 class="text-white"><i class="fas fa-fw fa-tasks"></i> Jasa Hadid Technology</h4>
<hr>
<div class="row row-cols-1 row-cols-md-2">
  @foreach ($jasa as $datas)
  <div class="col mb-4">
    <div class="card bg-ku">
      <img src="{{ url('g_jasa/'.$datas->gambar_jasa) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-white">{{ $datas->materi_jasa }}</h5>
        <tr>
          <p class="text-white"><b>Harga :</b> Rp.{{ number_format($datas->harga_jasa) }},-</p>
          
        </tr>
        <tr>
          <p class="text-white"><b>Kategori :</b> {{ $datas->kategori_jasa }}</p>
          
        </tr>
        <p class="card-text text-white">{{ $datas->keterangan_jasa }}</p>
        <hr>
        <tr>
          <a href="https://wa.me/6285861712279" class="btn btn-success"><i class="bi bi-whatsapp text-white"> Hubungi Kami</i></a>
        </tr>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection

@section('content3')
<br>
<h4 class="text-white"><i class="fas fa-fw fa-tasks"></i> Artikel Hadid Technology</h4>
<hr>
<div class="row row-cols-1 row-cols-md-2">
  @foreach ($artikel as $datas)
  <div class="col mb-4">
    <div class="card bg-ku">
      <img src="{{ url('g_artikel/'.$datas->gambar_artikel) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-white"><strong>{{ $datas->judul_artikel }}</strong></h5>
        <tr>
          <p class="text-white"><b>Penulis :</b> {{ $datas->penulis_artikel }}</p>
          
        </tr>
        <tr>
          <p class="text-white"><b>Keterangan :</b> {{ $datas->keterangan_artikel }}</p>
          
        </tr>
        <tr>
          <p class="text-white"><b>Kategori :</b> {{ $datas->kategori_artikel }}</p>
          
        </tr>
        <hr>
        <tr>
          <a href="/artikel/baca/{{ $datas->id_artikel }}" class="btn btn-success"><i class="fas fa-fw fa-book"></i> Baca</a>
        </tr>

      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection