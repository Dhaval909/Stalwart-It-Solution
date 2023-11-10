<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@section('title') Stalwart It Solution</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  {{-- Favicons --}}
  <link href="{{asset('Frontend/assets/img/stalwartitsolutionlogo1.png')}}" rel="icon">
  <link href="{{ asset('Frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  {{-- Google Fonts --}}
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  {{-- Vendor CSS Files --}}
  <link href="{{asset('Frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('Frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('Frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('Frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('Frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  {{-- Template Main CSS File --}}
  <link href="{{asset('Frontend/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('Frontend/assets/css/custom.css?v='.time())}}" rel="stylesheet">

</head>

<body>

  {{-- ======= Header ======= --}}
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="{{asset('Frontend/assets/img/stalwartitsolutionlogo.png')}}" alt="">

      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/about')  }}">About Us</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="{{ '/webdevlopment' }}">Web Devlopment</a></li>
              <li><a class="nav-link scrollto" href="{{ '/Nativeapps' }}">Native Apps Development </a></li>
              <li><a class="nav-link scrollto" href="{{ '/Crossplatform' }}">Cross Platform Apps Development</a></li>
              <li><a class="nav-link scrollto" href="{{ '/wireframe' }}">Wireframe Ui/UX</a></li>
              <li><a class="nav-link scrollto" href="{{ '/hiredevloper' }}">Hire Dedicated Developer	</a></li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="{{url('/portfolio')  }}">Portfolio</a></li>
          <!-- <li><a class="nav-link scrollto" href="{{url('/team')  }}">Team</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="{{url('/blog')}}">Blogs</a></li> -->
         <li><a class="nav-link scrollto" href="{{ url('/contactus') }}">Contact Us</a></li>
        <li><a class="getstarted scrollto" href="{{url('/contactus') }}">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>{{-- .navbar --}}

    </div>
  </header>{{-- End Header --}}
