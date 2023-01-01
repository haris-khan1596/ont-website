@extends('layouts.main')
<head>
    <title>{{$events[0]->title}}</title>
</head>
@section('main-section')

<section id="event-banner" class="event-banner">
    <div class="container position-relative" style="background-image: url('assets/img/blog/blog-1.jpg') ;">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1  flex-column justify-content-center text-center text-lg-start">
          <h2>{{$events[0]->title}}</h2>
          <p>{{$events[0]->objective}}</p>
          <button class="btn mt-auto">Register Now</button>
        </div>
      </div>
    </div>
  
    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">
  
          <div class="col-xl-12 col-md-12" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box row">
  
  
              <div class="col-xl-4 col-md-4 text-div">
                <h5>Domain</h5>
                <p>
                  @php
                      $domains=DB::table('domains')->select('*')->where("d_id", "=", $events[0]->d_id)->first()->name;
                  @endphp
                  {{$domains}}
                  </p>
              </div>
  
              <div class="col-xl-4 col-md-4 text-div">
                <h5>Location</h5>
                <p>{{$events[0]->location}}</p>
              </div>
              
              <div class="col-xl-4 col-md-4 text-div">
                <h5>Time</h5>
                <p>{{$events[0]->timmings}}</p>
              </div>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Section -->
  
  <div class="container" data-aos="zoom-out">
    <p>
      {{$events[0]->description}}
    </p>
  </div>
  
       <!-- ======= Clients Section ======= -->
       <section id="clients" class="clients">
        <div class="container" data-aos="zoom-out">
  
          <div class="section-header">
            <h2>Our Partners</h2>
          </div>
  
          <div class="h-auto clients-slider swiper">
            <div class="h-auto swiper-wrapper align-items-center">
              <div class="h-auto swiper-slide"><img src="{{url('assets/img/collaborator/hec.png')}}" class="img-fluid" alt=""></div>
              <div class="h-auto swiper-slide"><img src="{{url('assets/img/collaborator/asiaconect.jpeg')}}" class="img-fluid" alt=""></div>
              <div class="h-auto swiper-slide"><img src="{{url('assets/img/collaborator/pern.jpeg')}}" class="img-fluid" alt=""></div>
              <div class="h-auto swiper-slide"><img src="{{url('assets/img/collaborator/nust.jpeg')}}" class="img-fluid" alt=""></div>
              <div class="h-auto swiper-slide"><img src="{{url('assets/img/collaborator/santanna.png')}}" class="img-fluid" alt=""></div>
              <div class="h-auto swiper-slide"><img src="{{url('assets/img/collaborator/eu.png')}}" class="img-fluid" alt=""></div>
              <div class="h-auto swiper-slide"><img src="{{url('assets/img/collaborator/tein.png')}}" class="img-fluid" alt=""></div>
              </div>
          </div>
  
        </div>
      </section><!-- End Clients Section -->
  
    <section>

        <div class="section-header">
            <h2>Gallery</h2>
        </div>
        
    </section>

  
  </section>

@endsection