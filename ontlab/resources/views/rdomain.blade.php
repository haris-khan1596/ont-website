@extends('layouts.main')
<head>
    <title>{{$domains[0]->name}}</title>
</head>
@section('main-section')
<section id="domain">
    <div class="container" data-aos="fade-up"> 
  
    <div class="row gy-3">
      <div class="section-header">
        <h2>{{$domains[0]->name}}</h2>
        <p class="fst-italic">
          {{$domains[0]->objective}}
        </p>
      </div>
    </div>
  
      <p>
        {{$domains[0]->description}}
      </p>
  
      <section id="domain_image" class="image-80">
        <div class="container" data-aos="zoom-out">
            <img src="{{url('assets/img/breadcrumbs-bg.jpg')}}" alt="" >
        </div>
      </section><!-- End Call To Action Section -->
  
  
      <p>
        Description... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
      </p>
  
      <section id="pubs" class="pubs">
        <div class="section-header">
          <h2>Publications</h2>
        </div>
      </section>
    
  
      <div class="section-header">
        <h2>Related Projects</h2>
      </div>
  
      <section class="events">
        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @php
              $projects=DB::table('projects')->select('*')->where("d_id", "=", $domains[0]->d_id)->get();
            @endphp
            @foreach ($projects as $project)
            <x-project-slider 
            title="{{$project->title}}" 
            description="{{$project->goal}}" 
            projurl="projects/{{$project->proj_id}}" 
            img="assets/img/blog/blog-1.jpg"
            ></x-project-slider>
            @endforeach

          
          </div>  
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div><!--End Swiper-->
      </section>
      
    </div>
  </section>
@endsection