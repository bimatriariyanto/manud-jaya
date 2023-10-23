<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Desa Manud Jaya</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="{{ url('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="preload" href="{{ url('assets/css/fonts/dm.css') }}" as="style" onload="this.rel='stylesheet'">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-light">
            <div class="bg-primary text-white fw-bold fs-15 mb-2">
                <div class="container py-2 d-md-flex flex-md-row">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
                        <address class="mb-0">Jl.Soekarno Hatta</address>
                    </div>
                    <div class="d-flex flex-row align-items-center me-6 ms-auto">
                        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
                        <p class="mb-0">(021) 456 78 90</p>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
                        <p class="mb-0"><a href="mailto:sandbox@email.com"
                                class="link-white hover">manudjaya@manud.go.id</a></p>
                    </div>
                </div>
                <!-- /.container -->
            </div>
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="./index.html">
                            <img src="{{ url('assets/img/logo-manud.png') }}" srcset="{{ url('assets/img/logo-manud.png') }} 2x"
                                alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Profil</a>
                                    <ul class="dropdown-menu">

                                        <li class="nav-item"><a class="dropdown-item" href="/profil">Profil Desa</a>
                                        </li>
                                        {{-- <li class="nav-item"><a class="dropdown-item" href="#">Visi
                                                & Misi</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Tugas
                                                & Fungsi</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Struktur Organisasi
                                            </a></li> --}}


                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Kabar Desa</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('list_articles') }}">Semua</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Kegiatan Umum</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Himbauan</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Layanan Masyarakat</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Laporan Penggunaan Dana Desa</a>
                                        </li>
                                        {{-- <li class="nav-item"><a class="dropdown-item" href="#">Visi
                                                & Misi</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Tugas
                                                & Fungsi</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Struktur Organisasi
                                            </a></li> --}}
                                    </ul>
                                </li>
{{--                                <li class="nav-item"><a class="nav-link" href="#">Galeri</a></li>--}}
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                       data-bs-toggle="dropdown">Formulir</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSfyhf6gtHstfGs9M8dGkM7GFGXTyrt2YAtDdWNHVDZTAWYDkQ/viewform?usp=pp_url">Formulir Permohonan KTP</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                                <div>
                                    <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                    <br /> 00 (123) 456 78 90 <br />
                                    <nav class="nav social social-white mt-4">
                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                        <a href="#"><i class="uil uil-dribbble"></i></a>
                                        <a href="#"><i class="uil uil-instagram"></i></a>
                                        <a href="#"><i class="uil uil-youtube"></i></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                            </div>
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-light">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">

                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title  mb-3">Manud Jaya</h4>
                        <address class="pe-xl-15 pe-xxl-17">Jl. Soekarna Hatta, Desa Manud Jaya, Kec. Rancak, Kab. Bana
                        </address>
                        <a href="mailto:#" class="link-body">manujaya@manud.go.id</a><br /> (021) 456 78 90
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title  mb-3">Kontak Terkait</h4>
                        <ul class="list-unstyled text-reset mb-0">
                            <li><a href="#">(021) 928483 - Makam</a></li>
                            <li><a href="#">(021) 323232 - Ambulance Desa</a></li>
                            {{-- <li><a href="#">Projects</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li> --}}
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-6">
                    <div class="widget">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no"
                                    marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?width=600&amp;height=230&amp;hl=en&amp;q=manud jaya&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                    href="https://connectionsgame.org/">Connections Unlimited</a></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 600px;
                                    height: 230px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    width: 600px;
                                    height: 230px;
                                }

                                .gmap_iframe {
                                    width: 600px !important;
                                    height: 230px !important;
                                }
                            </style>
                        </div>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ url('assets/js/plugins.js') }}"></script>
    <script src="{{ url('assets/js/theme.js') }}"></script>
</body>

</html>
