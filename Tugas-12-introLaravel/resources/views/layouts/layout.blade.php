<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('template/assets/img/favicon.png')}}" rel="icon">
  <link href="template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('template/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('template/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('template/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="pricing-page">

  @include('partials.header')

  <main class="main">

    @include('partials.title')
    <!-- Pricing Section -->
    <section style="min-height: 80vh" class="p-4">
      <div class="container">
        @yield('content')
      </div>
    </section>

  </main>
  @include('partials.footer')


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('template/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('template/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('template/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('template/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('template/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('template/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('template/assets/js/main.js')}}"></script>

</body>

</html>