<?php
$route_name = Route::currentRouteName();
?>
{{-- ======= Header ======= --}}
<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <img src="{{asset('Frontend/assets/img/stalwartitsolutionlogo.png')}}" alt="">

    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto {{ ($route_name == 'home') ? 'active':'' }}" href="{{url('/')}}">Home</a></li>
        <li><a class="nav-link scrollto {{ ($route_name == 'about') ? 'active':'' }}" href="{{url ('/about') }}">About Us</a></li>
        <li class="dropdown">
          <a href="{{ url('/webdevlopment') }}"
          class="{{ ($route_name == 'webdevlopment' || $route_name == 'nativeapps' || $route_name == 'crossplatform' || $route_name == 'wireframe' || $route_name == 'hiredeveloper') ? 'active':'' }}" 
          >
            <span>Services</span> <i class="bi bi-chevron-down"></i>
          </a>
          <ul>
            <li><a class="nav-link scrollto {{ ($route_name == 'webdevelopment') ? 'active':'' }}" href="{{ url('/webdevlopment') }}">Web Devlopment</a></li>
            <li><a class="nav-link scrollto {{ ($route_name == 'nativeapps') ? 'active':'' }}" href="{{ url('/nativeapps') }}">Native Apps Development </a></li>
            <li><a class="nav-link scrollto {{ ($route_name == 'crossplatform') ? 'active':'' }}" href="{{ url('/crossplatform') }}">Cross Platform Apps Development</a></li>
            <li><a class="nav-link scrollto {{ ($route_name == 'wireframe') ? 'active':'' }}" href="{{ url('/wireframe') }}">Wireframe Ui/UX</a></li>
            <li><a class="nav-link scrollto {{ ($route_name == 'hiredeveloper') ? 'active':'' }}" href="{{ url('hiredevloper') }}">Hire Dedicated Developer	</a></li>
          </ul>
        </li>

        <li><a class="nav-link scrollto {{ ($route_name == 'portfolio') ? 'active':'' }}" href="{{ url('/portfolio') }}">Portfolio</a></li>
        <li><a class="nav-link scrollto {{ ($route_name == 'team') ? 'active':'' }}" href="{{ url('/team') }}">Team</a></li>
        <!-- <li><a class="nav-link scrollto {{ ($route_name == 'blog') ? 'active':'' }}" href="{{url('/blog')}}">Blogs</a></li> -->
       <li><a class="nav-link scrollto {{ ($route_name == 'contactus') ? 'active':'' }}" href="{{ url('/contactus')}}">Contact Us</a></li>
      <li><a class="getstarted scrollto text-center" href="{{ url('/contactus') }}">Get Started</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>{{-- .navbar --}}

  </div>
</header>{{-- End Header --}}