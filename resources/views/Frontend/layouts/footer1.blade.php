{{-- ======= Footer ======= --}}
<footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{url('Frontend/assets/img/stalwartitsolutionlogo.png')}}" alt="">
          {{-- <span>Stalwart it Solution</span>--}}
            </a>
            <p>Stalwart It Solutions is a leading technology solutions provider dedicated to delivering excellence in web and mobile app development, design, and consulting. We are passionate about innovation, user-centric design, and cutting-edge technology. Our commitment to quality and client satisfaction drives us to create exceptional digital experiences. Thank you for choosing us as your technology partner.</p>
            <div class="social-links mt-3">
              <a href="https://x.com/StalwartIt?s=20" class="twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="https://www.facebook.com/stalwartitsolution" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/stalwartitsolution/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/company/stalwart-it-solution/mycompany/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/about')}}">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/webdevlopment') }}">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/terms of services')  }}">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/privacy policy')  }}">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/webdevlopment') }}">Web Devlopment</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/Nativeapps') }}">Native Apps Devlopment</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/crossplatform') }}">Cross Platform Apps Devlopment</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/wireframe') }}">WireFrame Ui/Ux</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/hiredevloper') }}">Hire Dedicated Devloper</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.046194987808!2d72.53499487530088!3d23.02207601634671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84608661bf6d%3A0x7de4f8f91023120f!2sStalwart%20It%20Solution!5e0!3m2!1sen!2sin!4v1695364023584!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" target="_blank" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <strong>Address:</strong>  <a href="https://maps.app.goo.gl/TXbCDjneoLBDjSVL7" target="_blank">Stalwart It Solution, B-816, Stratum @Venus Ground, Opp. Jhansi ki rani BRTS bus stand, Nehrunagar, Ahmedabad, Gujarat, India</a>
                <strong><br>Phone:</strong> <a href="tel:+919016701277" title="call on 91 9016701277">+91 9016701277 </a>
                <strong>Email:</strong><a href="mailto:kartik@stalwartitsolution.com"title="mail on kartik@stalwartitsolution.com">kartik@stalwartitsolution.com</a>            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>stalwartitsolution</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        {{-- All the links in the footer should remain intact. --}}
        {{-- You can delete the links only if you purchased the pro version. --}}
        {{-- Licensing information: https://bootstrapmade.com/license/ --}}
        {{-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ --}}
        Designed by <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer>{{-- End Footer --}}

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  {{-- Vendor JS Files --}}
  <script src="{{url('./Frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{url('./Frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{url('./Frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('./Frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('./Frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('./Frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{url('./Frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  {{-- Template Main JS File --}}
  <script src="{{url('./Frontend/assets/js/main.js')}}"></script>

</body>

</html>
