@extends("layouts.main")
@section("main-section")
    
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Optical Networks and Technologies Lab</h2>
          <p>ONT lab is strongly dedicated to interdisciplinary and collaborative (national and international) research providing a 
            favorable atmosphere for exchanging new knowledge and ideas. We strive to connect the diverse ideas for effective networking.
             It contributes to the advancement and dissemination of knowledge through scholarly (high impact) publications. 
             This lab is also engaged in industrial partnerships and professional networking.</p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="#services" class="stretched-link">Research Areas</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="#about" class="stretched-link">About</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Join ONT Lab</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
  <div class="container" data-aos="fade-up">
  
  <div class="section-header">
    <h2>About Us</h2>
  </div>
  
  <div class="row gy-3">
    <div class="col-lg-4">
      <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
      </div>
    <div class="col-lg-6">
      <div class="content ps-0 ps-lg-5">
        <h3>Vision</h3>
        <p class="fst-italic">
          To be a centre of excellence for imparting high-quality education, promoting cutting-edge research and cultivating entrepreneurial culture, while instilling sound humanitarian values thus, contributing towards the knowledge economy of Pakistan.
        </p>
        <h3>Mission</h3>
        <p>
          To provide world-class education in the fields of Electrical Engineering and Computing through dedicated faculty,  continuous quality improvement and a fair and conducive environment.
          To promote progressive research through engagement with industry, government and international collaborators.
          To instil the spirit of humanity through awareness of social issues and participation in co/extra-curricular activities and community service.
          To contribute in the development and economic progress of Pakistan by promoting the culture of entrepreneurship and enhancing leadership skills.
        </p>
      </div>
    </div>
  </div>
  </div>
  </section><!-- End About Us Section -->

      <!-- ======= Events Section ======= -->
      <section id="events" class="events sections-bg">
        <div class="container" data-aos="fade-up">
    
          <div class="section-header">
            <h2>Events</h2>
          </div>
    
          <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @php
                    $events=DB::table('events')->select('*')->orderBy('timmings','desc')->get();
                    $count=0;
                @endphp
                @foreach ($events as $event)
                <x-event-badge
                title="{{$event->title}}"
                time="{{$event->timmings}}"
                location="{{$event->location}}"
                eventurl="/events/{{$event->title}}"
                domain="{{$event->d_id}}"
                image="assets/img/breadcrumbs-bg.jpg"
                ></x-event-badge>
                @if (++$count >=4)
                    @break;
                @endif
                @endforeach
                
            </div>
            
            <div class="swiper-button-prev" style="color: var(--color-primary);"></div>
            <div class="swiper-button-next" style="color: var(--color-primary);"></div>
          </div><!--End Swiper-->
    
        </div>
    </section><!-- End Recent events Section -->
  
  
      <!-- ======= Stats Counter Section ======= -->
      <section id="counts" class="counts">
        <div class="container">

          <div  class="section-header">
            <h2>Statistics</h2>
          </div>
          <div class="row">
  
            <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                <p>Fundings</p>
              </div>
            </div>
  
            <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                <p>Publications</p>
              </div>
            </div>
  
            <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                <p>Citations</p>
              </div>
            </div>
  
            <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
  
            <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                <p>Awards</p>
              </div>
            </div>
  
            <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                <p>Internships</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Counts Section -->
  
      <!-- ======= Our Research Section ======= -->
      <section id="services" class="services sections-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Research Domains</h2>
          </div>
  
          <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

            @php
            $domains=DB::table('domains')->select('*')->get();
            @endphp
            @foreach ($domains as $domain)
            <x-domain-badge
            title="{{$domain->name}}"
            description="{{$domain->description}}"
            url="/research/{{$domain->d_id}}"
            ></x-domain-badge>                
            @endforeach
            
          </div>
          
        </div>
      </section><!-- End Our Services Section -->

       <!-- ======= Clients Section ======= -->
       <section id="clients" class="clients">
        <div class="container" data-aos="zoom-out">
  
          <div class="section-header">
            <h2>Our Partners</h2>
          </div>
  
          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><img src="assets/img/collaborator/hec.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/collaborator/asiaconect.jpeg" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/collaborator/pern.jpeg" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/collaborator/nust.jpeg" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/collaborator/santanna.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/collaborator/eu.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/collaborator/tein.png" class="img-fluid" alt=""></div>
              </div>
          </div>
  
        </div>
      </section><!-- End Clients Section -->
  
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Faculty Members</h2>
          </div>
  
          <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="assets/img/team/arsalanahmad.jpeg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Dr. Arsalan Ahmad</h3>
                        <h4>Director</h4>
                        <h4>Associate Professor, SEECS</h4>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Dr. Hasan Ali Khattak</h3>
                        <h4>Director</h4>
                        <h4>Associate Professor, SEECS</h4>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Dr. Salman</h3>
                        <h4>Director</h4>
                        <h4>Associate Professor, SEECS</h4>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->
  
      
      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
  
          <div class="row gy-4">
  
            <div class="col-lg-4">
              <div class="content px-xl-5">
                <h3>Frequently Asked <strong>Questions</strong></h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                </p>
              </div>
            </div>
  
            <div class="col-lg-8">
  
              <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                      <span class="num">1.</span>
                      Non consectetur a erat nam at lectus urna duis?
                    </button>
                  </h3>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                      <span class="num">2.</span>
                      Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                    </button>
                  </h3>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                      <span class="num">3.</span>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                    </button>
                  </h3>
                  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                      <span class="num">4.</span>
                      Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                    </button>
                  </h3>
                  <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                      <span class="num">5.</span>
                      Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                    </button>
                  </h3>
                  <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
              </div>
  
            </div>
          </div>
  
        </div>
      </section><!-- End Frequently Asked Questions Section -->
  
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Contact</h2>
            <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
          </div>
  
          <div class="row gx-lg-0 gy-4">
  
            <div class="col-lg-4">
  
              <div class="info-container d-flex flex-column align-items-center justify-content-center">
                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Location:</h4>
                    <p>ONT lab, SEECS, NUST, H-12 Islamabad, Pakistan</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <p>ont@seecs.edu.pk</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-phone flex-shrink-0"></i>
                  <div>
                    <h4>Call:</h4>
                    <p>+92 51 90852092</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-clock flex-shrink-0"></i>
                  <div>
                    <h4>Open Hours:</h4>
                    <p>Mon-Fri: 09:00 - 17:00 hrs</p>
                  </div>
                </div><!-- End Info Item -->
              </div>
  
            </div>
  
            <div class="col-lg-8">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
@endsection