 {{-- ======= Contact Section ======= --}}
    <section id="contact" class="contact mt-4">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <a href="https://maps.app.goo.gl/TXbCDjneoLBDjSVL7" target="_blank"><i class="bi bi-geo-alt"></i></a>
                  <h3>Address</h3>
                  <p><a href="https://maps.app.goo.gl/TXbCDjneoLBDjSVL7" target="_blank">Stalwart It Solution, B-816, Stratum @Venus Ground, Opp. Jhansi ki rani BRTS bus stand, Nehrunagar, Ahmedabad, Gujarat, India</a></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <a href="tel:+919016701277" title="call on 91 9016701277"><i class="bi bi-telephone"></i></a>
                  <h3>Call Us</h3>
                  <p><a href="tel:+919016701277" title="call on 91 9016701277">+91 9016701277 </a></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <a href="mailto:kartik@stalwartitsolution.com"title="mail on kartik@stalwartitsolution.com"><i class="bi bi-envelope"></i></a>
                  <h3>Email Us</h3>
                  <p><a href="mailto:kartik@stalwartitsolution.com"title="mail on kartik@stalwartitsolution.com">kartik@stalwartitsolution.com</a></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Saturday<br>10:00AM - 08:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="{{ route('sendcontact') }}" method="post" class="php-email-form">
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section>
    {{-- EndContactSection --}}