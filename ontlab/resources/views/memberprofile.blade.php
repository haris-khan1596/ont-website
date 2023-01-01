@extends('layouts.main')
<head>
    <title>Team</title>
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap-edu-timeline.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap-prof-timeline.css')}}" rel="stylesheet" />
</head>
@section('main-section')
<section id="team" class="team">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Personal Details</h2>
      </div>

      <div class="row gy-4">
        <div
          class="col-xl-3 col-md-6 d-flex"
          data-aos="fade-up"
          data-aos-delay="100"
        >
          <div class="member">
            <img src="{{url($info[0]->img)}}" class="img-fluid" alt="" />
            <h4>Contact Information</h4>
            <span>+92-51-908521920</span>
            <span>{{$info[0]->email}}</span>
            <div class="social">
              <a href="{{$info[0]->scholar}}" target="_blank_"><i class="bi bi-google"></i></a>
              <a href="{{$info[0]->twitter}}" target="_blank_"><i class="bi bi-twitter"></i></a>
              <a href="{{$info[0]->linkedin}}" target="_blank_"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
        <!-- End Team Member -->
        

        <div
          class="col-xl-9 col-md-6 d-flex"
          data-aos="fade-up"
          data-aos-delay="100"
        >
        
          <div class="member" style="text-align: justify">
            <h3>{{$info[0]->name}}</h3>
            <h4>
              Principal Investigator and Director Optical Networking and
              Technologies (ONT) Lab
            </h4>

            <p class="no-italic"  style="text-decoration: none"> 
              Arsalan Ahmad received his MS in Communication Engineering and
              Ph.D. in Electronics and Communication Engineering from
              Politecnico di Torino, Italy in Sep 2010 & Feb 2014
              respectively. After completing his Ph.D., he has worked as a
              postdoc researcher at Politecnico di Torino, Italy on the
              physical layer aware design of fixed and flexible grid optical
              networks. He joined National University of Sciences and
              Technology (NUST), Pakistan in 2015 where he is currently
              working as an Associate Professor and the director of Optical
              Networks & Technologies (ONT) lab. From Jun 2019 - Jan 2020, he
              was a research fellow at CONNECT research centre, Trinity
              College Dublin (TCD), Ireland. His work was focused on capacity
              sharing approaches and merging engine implementation in virtual
              PONs. Since Nov 2021, he is also working as a technical
              consultant with xFlow Research on open source networking
              technologies and leading a team of engineers tasked with the
              investigations of solutions to enable zero touch provisioning in
              enterprise and carrier grade networks. He is the recipient of
              NUST best university teacher award for the year 2020.He is also
              the principal investigator of EU/Asi@connect funded project
              “Software defined optical network training and research
              laboratory for TEIN NRENs”. He is the faculty in-charge and lead
              trainer of activities related to HAINA (Huawei Authorized
              Information and Network Academy) at NUST SEECS. He is a Huawei
              Certified Academy Instructor (HCAI) holding HCIP & HCIA
              certifications. His current research interests include computer
              networks, virtual PONs, machine learning in optical
              networking/communications, open source networking, software
              defined networking and network slicing for 5G services. He is
              also a member of HEC Pakistan Education & Research Network
              (PERN) core committee, Pak-UK Teaching Excellence Framework
              (TEF) and main committee on Pakistan Internet registries. and
              also an IEEE senior member and ISOC member.
            </p>
          </div>
        </div>
        </section>

        <section class="edu-exp">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="section-header">
            <h2>Education</h2>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card" style="border: none">
                <div class="card-body">
                  <div id="content">
                    <ul class="timeline">
                      @foreach ($edu as $e)
                      <x-education title="{{$e->degree}}" institute="{{$e->institute}}" time="{{$e->start}} - {{$e->end}}" ></x-education>
                      @endforeach

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Team Section -->

  <section class="pro-exp">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="section-header">
        <h2>Professional Experience</h2>
      </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="main-timeline">
                  @foreach ($exp as $ep)
                  <x-professional 
                  designation="{{$ep->designation}}"
                  year="{{$ep->start}}"
                  institute="{{$ep->institute}}"></x-professional>
                  @endforeach
                  </div>
              </div>
          </div>
      </div>
  </section>

@endsection