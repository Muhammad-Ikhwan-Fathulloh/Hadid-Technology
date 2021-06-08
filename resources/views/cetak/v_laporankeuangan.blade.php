<!DOCTYPE html>
<html>
<head>
	<title>Cetak | Hadid Technology</title>
	<link rel="shortcut icon" type="image/png" href="logo/hadid.png">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- Custom fonts for this template-->
  <link href="{{asset('template')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="{{asset('template')}}/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('template')}}/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

</head>
<body onload="window.print();">
<div class="card border-light mb-3">
	  <div class="card-body">
<h3><i class="fas fa-fw fa-check"></i> Laporan Transaksi</h3>
       <!--  <div class="row">
          <div>
          <label><strong>Tanggal Awal :</strong></label>
          <label><strong>{{ $tanggal_awal }}</strong></label>
        </div>
        
        <div>
          <label><strong>Tanggal Akhir :</strong></label>
          <label><strong>{{ $tanggal_akhir }}</strong></label>
        </div>
        </div> -->
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
          <td align="left">Rp.{{ number_format($datas->hargajual_produk) }}</td>
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
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Bootstrap core JavaScript-->
  <script src="{{asset('template')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('template')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('template')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('template')}}/js/sb-admin-2.min.js"></script>
</body>
</html>