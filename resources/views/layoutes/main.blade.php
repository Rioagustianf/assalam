<!DOCTYPE html>
<html lang="en">

<head>
  <title>MTs Assalam &mdash; Website by Zmhrr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap-datepicker.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/jquery.mb.YTPlayer.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <style>
    /* Override spacing navbar agar navlink tidak terlalu lebar */
    .site-navbar .container-fluid { padding-left: 2rem; padding-right: 2rem; }
    .site-navbar .site-navigation .site-menu > li { margin-right: 4px; }
    .site-navbar .site-navigation .site-menu > li > a { padding: 8px 12px; }
    /* Spasi antara tombol auth dan ikon sosial */
    .auth-buttons { margin-right: 12px; }
    @media (min-width: 992px) {
      .auth-buttons { margin-right: 16px; }
      .social-wrap a { margin-left: 6px; }
    }
    @media (max-width: 991.98px) {
      .site-navbar .site-navigation .site-menu > li > a { padding: 8px 10px; }
    }
  </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="py-2 bg-light">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>(0264) 272709</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span>assalammadrasahtsanawiyah@gmail.com</a> 
          </div>
        </div>
      </div>
    </div>

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="{{ route('index') }}" class="d-block">
            <img src="{{ asset('assets/images/LogAssalam.png') }}" alt="Logo" class="img-fluid" style="max-width: 100px; height: auto;">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav d-lg-block">
              <li><a href="{{ route('index') }}" class="">Beranda</a></li>
              <li>
                  <a href="{{ route('about') }}" class="nav-link ">Profil</a>
                </li>
                <li>
                  <a href="{{ route('ppdb') }}" class="nav-link text-left">PPDB</a>
                </li>
                <li>
                  <a href="{{ route('pembelajaran') }}" class="nav-link text-left">Pembelajaran</a>
                </li>
                <li>
                  <a href="{{ route('berita') }}" class="nav-link text-left">Berita</a>
                </li>
                <li>
                  <a href="{{ route('kontak') }}" class="nav-link text-left">Feedback</a>
                </li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto d-flex align-items-center justify-content-end flex-grow-1">
            <!-- Toggle hanya tampil di perangkat kecil -->
            <div class="mr-3 d-lg-none">
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black">
                <span class="icon-menu h3"></span>
              </a>
            </div>

            <!-- Tombol auth / dropdown user -->
            <div class="auth-buttons d-flex align-items-center" style="white-space: nowrap;">
              @auth
                <div class="dropdown d-inline-flex align-items-center">
                  <button class="btn btn-sm btn-light text-secondary border-0 dropdown-toggle d-inline-flex align-items-center" type="button" id="userMenuDropdown" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2">{{ auth()->user()->name }}</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-end" aria-labelledby="userMenuDropdown">
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}" class="px-3 py-1 m-0">
                      @csrf
                      <button type="submit" class="btn btn-link p-0 text-danger">Log Out</button>
                    </form>
                  </div>
                </div>
              @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary mr-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-sm btn-primary">Register</a>
              @endauth
            </div>

            <!-- Sosial hanya tampil di layar besar agar tidak menumpuk -->
            <div class="ml-4 social-wrap d-none d-lg-flex align-items-center">
              <a class="mr-1" href="https://www.facebook.com/profile.php?id=100089124393775"><span class="icon-facebook"></span></a>
              <a class="mr-1" href="https://www.instagram.com/mtsassalam_purwakarta"><span class="icon-instagram"></span></a>
              <a class="mr-1" href="https://youtube.com/@mtsassalamplered"><span class="icon-youtube"></span></a>
              <a class="mr-1" href="https://www.tiktok.com/@mtsassalam.pld.pwk?is_from_webapp=1&sender_device=pc"><span class="fab fa-tiktok"></span></a>
            </div>

            
          </div>

        </div>
      </div>
    </header>

    <!-- Bagian Konten -->
    <div class="container-fluid">
  @yield('content')
    </div>

<!-- Footer -->
<div class="footer" style="background-color: #2c3e50; color: #fff; padding: 20px;">
  <div class="container-fluid">
    <div class="row">
      <!-- Kolom 1: Tentang Sekolah -->
      <div class="col-lg-3">
      <p class="mb-4">
  <img src="{{ asset('assets/images/LogAssalam.png') }}" alt="Logo" class="img-fluid" style="max-width: 100px; background-color: #fff; padding: 10px; border-radius: 8px;">
</p>
        <p>MTs Assalam Purwakarta adalah lembaga pendidikan Islam yang berkomitmen membentuk generasi yang berakhlak mulia, cerdas, dan mandiri.</p>
      </div>

      <!-- Kolom 2: Navigasi Cepat -->
      <div class="col-lg-3">
        <h3 class="footer-heading"><span>Menu Utama</span></h3>
        <ul class="list-unstyled">
          <li><a href="{{ route('index') }}">Beranda</a></li>
          <li><a href="{{ route('about') }}">Profil</a></li>
          <li><a href="{{ route('ppdb') }}">PPDB</a></li>
          <li><a href="{{ route('berita') }}">Berita</a></li>
          <li><a href="{{ route('kontak') }}">Feedback</a></li>
        </ul>
      </div>

      <!-- Kolom 3: Ekstrakurikuler -->
      <div class="col-lg-3">
        <h3 class="footer-heading"><span>Ekstrakurikuler</span></h3>
        <ul class="list-unstyled">
          <li><a href="#">OSIS</a></li>
          <li><a href="#">Pramuka</a></li>
          <li><a href="#">Drumband</a></li>
          <li><a href="#">Marawis</a></li>
          <li><a href="#">Futsal</a></li>
        </ul>
      </div>

      <!-- Kolom 4: Kontak -->
      <div class="col-lg-3">
        <h3 class="footer-heading"><span>Kontak Kami</span></h3>
        <ul class="list-unstyled">
          <li>Alamat: Jl.Sempur, Palinggihan, Plered, Palinggihan, Purwakarta, Kabupaten Purwakarta, Jawa Barat 41162</li>
          <li>Email: <a href="mailto:mtsassalam@gmail.com" style="color: #fff;">assalammadrasahtsanawiyah@gmail.com</a></li>
          <li>Telp: (0264) 272709</li>
          <li>Sosial Media:
            <div class="mt-2">
              <a href="https://www.instagram.com/mtsassalam_purwakarta" style="color: #fff;"><i class="fab fa-instagram"></i></a>
              <a href="https://www.youtube.com/@mtsassalamplered" style="color: #fff;" class="ml-2"><i class="fab fa-youtube"></i></a>
              <a href="https://www.tiktok.com/@mtsassalam.pld.pwk" style="color: #fff;" class="ml-2"><i class="fab fa-tiktok"></i></a>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- Copyright -->
    <div class="row mt-4">
      <div class="col-12 text-center">
        <div class="copyright">
          <p>
            &copy; <script>document.write(new Date().getFullYear());</script> MTs Assalam Purwakarta. All rights reserved.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


  </div>
  </div>
  <!-- Loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
