<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>My Hotel<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ route('index') }}">Beranda</a></li>
          <li><a class="nav-link scrollto" href="index.html#kamar">Kamar</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="index.html#contact">Kontak</a></li>
          @if (Auth::check())
          <li><a class="nav-link scrollto" href="{{ route('history') }}">Riwayat Reservasi Kamar</a></li>
          @else
          @endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      @if (Auth::check())
      <a class="btn-getstarted scrollto" href="{{ route('logout') }}">Keluar</a>
      @else
      <a class="btn-getstarted scrollto" href="{{ route('login') }}">Masuk</a>

      @endif

    </div>
  </header><!-- End Header -->
