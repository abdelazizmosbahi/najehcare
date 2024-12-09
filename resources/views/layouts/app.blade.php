<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">

  <title>NajehCare</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="images/hero-bg.png" alt="">
    </div>

    <!-- Header Section -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="{{ url('/') }}">
            <span>NajehCare</span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <!-- Appointments -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('appointments.index') }}">Appointments</a>
              </li>

              <!-- Doctors -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('doctors.index') }}">Doctors</a>
              </li>

              <!-- Patients -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('patients.index') }}">Patients</a>
              </li>

              <!-- Services -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('services.index') }}">Services</a>
              </li>

              <!-- Invoices -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('invoices.index') }}">Invoices</a>
              </li>

              <!-- Contact -->
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
              </li>
            </ul>

            <!-- Search -->
            <form class="form-inline ml-auto">
              <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>

            <!-- Authentication -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="authDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="authDropdown">
                  @guest
                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                  @else
                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  @endguest
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>
    
  </div>

  <!-- Footer Section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_contact">
            <h4>Reach at..</h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>Location</span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>Call +01 1234567890</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>demo@gmail.com</span>
              </a>
            </div>
          </div>
          <div class="footer_social">
            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_detail">
            <h4>About</h4>
            <p>Beatae provident nobis mollitia magnam voluptatum, unde dicta facilis minima veniam corporis laudantium alias tenetur eveniet illum reprehenderit fugit a delectus officiis blanditiis ea.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto footer_col">
          <div class="footer_link_box">
            <h4>Links</h4>
            <div class="footer_links">
              <a class="active" href="{{ url('/') }}">Home</a>
              <a class="" href="{{ url('/about') }}">About</a>
              <a class="" href="{{ url('/departments') }}">Departments</a>
              <a class="" href="{{ url('/doctors') }}">Doctors</a>
              <a class="" href="{{ url('/contact') }}">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col">
          <h4>Newsletter</h4>
          <form action="#">
            <input type="email" placeholder="Enter email" />
            <button type="submit">Subscribe</button>
          </form>
        </div>
      </div>
      <div class="footer-info">
        <p><span id="displayYear"></span> Distributed By <a href="https://themewagon.com/">NajehCare</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>

</body>

</html>
