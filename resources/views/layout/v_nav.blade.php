 <!-- Nav Item - Dashboard -->
      
      <!-- <li class="nav-item {{request()->is('register')?'active':''}}">
        <a class="nav-link" href="/register">
          <i class="fas fa-fw fa-user"></i>
          <span>Register User</span></a>
      </li> -->
@if (auth()->user()->level==1)
      <li class="nav-item {{request()->is('home')?'active':''}}">
        <a class="nav-link" href="/home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>
      
              <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        User
      </div>
      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Produk</span></a>
      </li>
      <li class="nav-item {{request()->is('pesanan')?'active':''}}">
        <a class="nav-link" href="/pesanan">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Pesanan</span></a>
      </li>
      <li class="nav-item {{request()->is('transaksi')?'active':''}}">
        <a class="nav-link" href="/transaksi">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Transaksi</span></a>
      </li> -->
      

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item {{request()->is('user')?'active':''}}">
        <a class="nav-link" href="/user">
          <i class="fas fa-fw fa-user"></i>
          <span>User</span></a>
      </li> -->

      <li class="nav-item {{request()->is('produk')?'active':''}}">
        <a class="nav-link" href="/produk">
          <i class="fas fa-fw fa-list"></i>
          <span>Produk</span></a>
      </li>

      <li class="nav-item {{request()->is('jasa')?'active':''}}">
        <a class="nav-link" href="/jasa">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Jasa</span></a>
      </li>
      <li class="nav-item {{request()->is('artikel')?'active':''}}">
        <a class="nav-link" href="/artikel">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Artikel</span></a>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item {{request()->is('konfirmasi')?'active':''}} {{request()->is('riwayattransaksi')?'active':''}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Transaksi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/konfirmasi">Konfirmasi Transaksi</a>
            <a class="collapse-item" href="/riwayattransaksi">Riwayat Transaksi</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">       
@elseif (auth()->user()->level==2)
      <li class="nav-item {{request()->is('home')?'active':''}}">
        <a class="nav-link" href="/home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>
            <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        User
      </div>
      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>List</span></a>
      </li>
      <li class="nav-item {{request()->is('pesanan')?'active':''}}">
        <a class="nav-link" href="/pesanan">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Pesanan</span></a>
      </li>
      <li class="nav-item {{request()->is('transaksi')?'active':''}}">
        <a class="nav-link" href="/transaksi">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Transaksi</span></a>
      </li>
      

      <!-- Divider -->
      <hr class="sidebar-divider">        
@endif

     

      
      

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->