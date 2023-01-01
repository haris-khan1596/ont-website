@extends('layouts.main')
<head>
    <title>Events</title>
</head>
@section('main-section')

 <!-- ======= Events Section ======= -->
 
    <div class="event-banner d-flex align-items-center flex-column" style="background-image: url('assets/img/blog/blog-1.jpg'); background-repeat: no-repeat; width:100%; background-size: cover;">
    <button class="btn mt-auto">Register Now</button>
    </div>

  <section id="events" class="events sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Recent Events</h2>
      </div>

      <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          @php
          $events=DB::table('events')->select('*')->get();
          $count=0;
          @endphp
          @foreach ($events as $event)
          <x-event-badge
          title="{{$event->title}}"
          time="{{$event->timmings}}"
          location="{{$event->location}}"
          eventurl="/events/{{$event->event_id}}"
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

@endsection