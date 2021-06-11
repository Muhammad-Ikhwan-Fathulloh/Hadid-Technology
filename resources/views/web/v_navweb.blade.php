<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-gradient-dark">
    <div class="container-fluid">
      <img src="{{ url('logo/hadid.png') }}" width="80px">
      <a class="navbar-brand" href="#"><strong><i><span class="orange">HADID</span> <span class="gold">TECHNOLOGY</span></i></strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <li class="nav-item">
            <a class="nav-link" href="/home"><i class="bi bi-house-fill"> Home</i></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#about"><i class="bi bi-info-circle-fill"> About</i></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#contact"><i <i class="bi bi-telephone-fill"> Contact</i></a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Service</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li> -->

          <!-- <li class="nav-item">
            
          </li> -->
          
          </li>

        </ul>
        <li class="d-flex nav-item">
            <div class="text-white">
              <a href="/pesanan" class="btn btn-success"><i class="fas fa-fw fa-shopping-cart"></i> Keranjang <span class="badge bg-danger">{{ $notifk }}</span></a>
              <button class="btn btn-info">
              <i class="fas fa-fw fa-user"></i>
              @if (auth()->user()->level==1)
                    {{ Auth::user()->name }}
              @elseif (auth()->user()->level==2)
                    {{ Auth::user()->name }}
              @endif
              </button>
            </div>
      </div>
    </div>
  </nav>
</header>
