<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Sailor/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('Sailor/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ asset('Sailor/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('Sailor/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('Sailor/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('Sailor/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{ asset('Sailor/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Sailor/assets/css/style.css')}}" rel="stylesheet">
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest"> -->
    <link href="{{ asset('Sailor/assets/img/Adhiakta(2).png') }}" type="image/png" sizes="32x32" rel="shortcut icon">

    <!-- =======================================================
  * Template Name: Sailor - v2.2.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body onload=display_ct();>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo"><a href="{{ url('/') }}">ADHIAKTA</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">

                <ul>
                    <li class="active"><a href="{{ url('/') }}">Beranda</a></li>

                    <li class="active"><a href="{{ url('about') }}">Tentang Kami</a></li>

                    <li class="active"><a href="{{ url('services') }}">Pelayanan</a></li>
                    <li class="active"><a href="{{ url('testimoni') }}">Testimoni</a></li>
                    <li class="active"><a href="{{ url('contact') }}">Kontak</a></li>
                    <li style="margin-left:50%; font-weight:bold">Time : <span id="ct"></span></li>

                </ul>

            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <main id="main">
        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            @php
                            $data = \App\Footer::all();
                            @endphp
                            @foreach ($data as $f)
                            <h3>ADHIAKTA</h3>
                            <p style="white-space::pre-wrap;">
                                {{$f->pengantar1}}<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Pintasan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('about') }}">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('services') }}">Pelayanan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('portofolio') }}">Portofolio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('contact') }}">Kontak Kami</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Jam Operasional Kantor</h4>
                        <p style="white-space:pre-wrap;">{{$f->pengantar2}}</p>
                        @endforeach
                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Ikuti kami</h4>
                        @php
                        $data = \App\Contact::all();
                        @endphp
                        @foreach ($data as $c)
                        <div class="footer-info">
                            <strong>Phone:</strong>
                            <p style="white-space: pre-line; font-family:sans-serif;"> {{$c->telp}}</p><br>
                            <strong>Email:</strong><a style="color:cornflowerblue;" href="https://mail.google.com/mail/?view=cm&source=mailto&to={{$c->email}}"> {{$c->email}}</a><br>
                            <div class="social-links mt-3">
                                <a href="#dd" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://www.instagram.com/adhiakta.lo/" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="https://api.whatsapp.com/send?phone={{$c->whatsapp}}&text=Halo%20saya%20ingin%20bertanya%20tentang%20seputar%20penutupan%20kartu%20kredit%20dan%20KTA" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                            </div>
                            <br><br>
                            @endforeach
                        </div>
                    </div>
                    <div class="container">
                        <div class="copyright">
                            &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Sailor/assets/vendor/jquery/jquery.min.js')"></script>
    <script src="{{ asset('Sailor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')"></script>
    <script src="{{ asset('Sailor/assets/vendor/jquery.easing/jquery.easing.min.js')"></script>
    <script src="{{ asset('Sailor/assets/vendor/php-email-form/validate.js')"></script>
    <script src="{{ asset('Sailor/assets/vendor/isotope-layout/isotope.pkgd.min.js')"></script>
    <script src="{{ asset('Sailor/assets/vendor/venobox/venobox.min.js')"></script>
    <script src="{{ asset('Sailor/assets/vendor/waypoints/jquery.waypoints.min.js')"></script>
    <script src="{{ asset('Sailor/assets/vendor/owl.carousel/owl.carousel.min.js')"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Sailor/assets/js/main.js')"></script>
    <script type="text/javascript">
        function display_c() {
            var refresh=1000;
            mytime=setTimeout('display_ct()', refresh)
        }

        function display_ct() {
            var x = new Date()
            var minute = x.getMinutes();
            if (minute < 10){minute='0' + minute;}
            x1 = x.getHours( )+ ":" + minute
            document.getElementById('ct').innerHTML = x1;
            display_c();
        }
    </script>

</body>

</html>
