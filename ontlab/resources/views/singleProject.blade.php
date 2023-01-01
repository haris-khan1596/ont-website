@extends('layouts.main')
<head>
    <title>{{$projects[0]->title}}</title>
</head>
@section('main-section')


<section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>{{$projects[0]->title}}</h2>
      <p>Project Domain</p>
    </div>

    <p>
      {{$projects[0]->description}}
    </p>

</section><!-- End Projects Section -->


@endsection