<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TheEvent</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
  <!-- Feather -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/show.css') }}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="signin.css" rel="stylesheet">
  <link type="text/css" href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/style.css">

  <link href="{{ asset('/assets/css/dashboard.css')}}">

  <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
  <link href="{{ asset('assets/css/style-detail.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/style-detail.css') }}">

</head>

<body>

    @include('partials.navbar')

  <div class="container" mt-4>
    @yield('child')
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
  
          <div class="col-lg-3 col-md-6 footer-info">
            <img src="assets/img/logo.png" alt="TheEvent">
            <p>"TheEvent" is a registration website that provides various seminars and webinars, offering users the opportunity to expand their knowledge, participate in discussions, and connect with experts in various fields. The website is designed to facilitate virtual meetings between renowned speakers and participants from all over Indonesia.</p>
          </div>
  
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>
  
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jl. Ir Sutami No. 36<br>
              Surakarta<br>
              <strong>Phone:</strong> +62 5589 55488 55<br>
              <strong>Email:</strong> theevent@example.com<br>
            </p>
  
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <p>&copy; Copyright
              <strong>TheEvent</strong>. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/assets/js/main.js')}}"></script>
  <script src="{{ asset('/assets/js/dashboard.js')}}"></script>

  <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/dashboard.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

  
</body> 

</html>