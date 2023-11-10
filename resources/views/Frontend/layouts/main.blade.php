<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')Stalwart It Solution</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  {{--  Favicons --}}
  <link href="{{asset('Frontend/assets/img/stalwartitsolutionlogo1.png')}}" rel="icon">
  <link href="{{asset('Frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

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

	@include('Frontend.layouts.header')
	@yield('main-container')
	@include('Frontend.layouts.footer')

	{{-- Vendor JS Files --}}
	<script src="{{asset('Frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
	<script src="{{asset('Frontend/assets/vendor/aos/aos.js')}}"></script>
	<script src="{{asset('Frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('Frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
	<script src="{{asset('Frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('Frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
	<script src="{{asset('Frontend/assets/vendor/php-email-form/validate.js')}}"></script>
	{{-- Template Main JS File --}}
	<script src="{{asset('Frontend/assets/js/main.js')}}"></script>

</body>
</html>
