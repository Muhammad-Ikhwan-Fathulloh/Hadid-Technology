
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>@yield('title') | Hadid Technology</title>
    <link rel="shortcut icon" type="image/png" href="logo/hadid.png">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    

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


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .bg-ku {
        background: linear-gradient(to right, #29648a, #25274d);
      }

      .bg-ka {
        background: #29648a;
      }

      .bg-kuk {
        background: #4682b4;
      }

      .bg-b {
        background: #464866;
      }

      .orange {
        color: #FF8C00;
      }

      .gold {
        color: #FFD700;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body class="bg-ku">
    
@include('web.v_navweb')
<main>
<br>
<br>
<br>
<br>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-caption text-left">
            <h1><i><span class="orange">HADID</span> <span class="gold">TECHNOLOGY</span></i></h1>
            <p>Iron Technology for Good Change.</p>
            <p><a class="btn btn-lg btn-success" href=""><i class="bi bi-cpu"> Build Your Project</i></a></p>
          </div>
    <div class="carousel-item active">
      <img src="logo/techno.jpg" class="d-block w-100" alt="logo/techno.jpg">
    </div>
    <div class="carousel-item">
      <img src="logo/techno2.jpg" class="d-block w-100" alt="logo/techno.jpg">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section id="about">

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#104e8b" fill-opacity="1" d="M0,96L240,64L480,224L720,160L960,32L1200,96L1440,192L1440,0L1200,0L960,0L720,0L480,0L240,0L0,0Z"></path></svg>
  
    <div class="container">
  <div class="row">
    <div class="col-sm-5 col-md-6 text-center">
      <img src="{{ url('logo/desainc.png') }}" width="500px">
    </div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 text-center">
      
      <strong class="text-white">Hadid Technology <i class="fas fa-fw fa-fighter-jet"></i></strong>
      <p class="text-white">Menyediakan kebutuhan proyek Internet of Things anda dengan mudah, disertai dengan berbagai jasa instruktur berpengalaman untuk kamu yang baru terjun ke dunia ini. Menjalin kerjasama dalam berbagai perkembangan Teknologi Internet of Things untuk penyelesaian masalah anda.</p>

      <a href="https://wa.me/6285861712279" class="btn btn-info"><i class="fas fa-fw fa-users"></i> Kolaborasi dengan kami</a>
    </div>
  </div>
</div>
  </section>


  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    @yield('content1')

    @yield('content2')

    @yield('content3')

    
    <hr class="featurette-divider">

  

  </div><!-- /.container -->


  
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Bootstrap core JavaScript-->
  <script src="{{asset('template')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('template')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('template')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('template')}}/js/sb-admin-2.min.js"></script>

    <!-- <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

       -->

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#29648a" fill-opacity="1" d="M0,96L288,64L576,160L864,160L1152,128L1440,64L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
  <!-- FOOTER -->
<section class="bg-ka">
  <section class="bg-ka" id="contact">
  <footer class="text-white py-5">
    <div class="container">
      
      <strong>Contact us : </strong>
      <a href="https://www.tokopedia.com/hadidtechnology/"><i class="bi bi-shop text-white"> Tokopedia</i></a>
      <a href="https://www.instagram.com/hadidtechnology/"><i class="bi bi-instagram text-white"> Instagram</i></a>
      <a href="https://wa.me/6285861712279"><i class="bi bi-whatsapp text-white"> Whatsapp</i></a>
      <hr>
      <p class="float-end mb-1">
        <a href="#" class="text-white btn btn-info"><i class="fas fa-fw fa-arrow-circle-up"></i> Back to top</a>
      </p>
      <p class="mb-1">Copyright &copy; 2021 | Hadid Technology</p>
      <p class="mb-0">Iron Technology for Good Change</p>
    </div>
  </footer>
</section>
@include('sweet::alert')
  </body>

  
</html>
