@extends('layouts.main')
<head>
    <title>Projects</title>
</head>
@section('main-section')


<section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Projects</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
    <div class="col-lg-8">


        <div class="row gy-4 projects-list">
          @php
          // if ($filter='') {
            $projects=DB::table('projects')->select('*')->get();
          // }else {
          //   $projects=DB::table('projects')->select('*')->where("d_id",'=',$filter)->get();
          // }
          @endphp
          @foreach ($projects as $project)
          @php
              $d_name=DB::table('domains')->select('*')->where("d_id", "=", $project->d_id)->first()->name;
          @endphp
          <x-project-badge 
          title="{{$project->title}}" 
          description="{{$project->goal}}" 
          domains="{{$d_name}}" 
          projecturl="projects/{{$project->proj_id}}" 
          img="assets/img/blog/blog-1.jpg"
          ></x-project-badge>
          @endforeach


        </div><!-- End projects list -->
        </div>


    <div class="col-lg-4">

        <div class="sidebar">

          <div class="sidebar-item tags">
            <h3 class="sidebar-title">Domains</h3>
            <ul class="mt-3">
              @php
                  $d_name=DB::table('domains')->select('*')->get();
              @endphp
              @foreach ($d_name as $domain)
              <li><a href="#">{{$domain->name}}</a></li>
              @endforeach
            </ul>
          </div><!-- End sidebar categories-->

        </div><!-- End projects Sidebar -->
    </div></div>

      </div>


    <div class="projects-pagination">
      <ul class="justify-content-center">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div><!-- End projects pagination -->

  </div>
</section><!-- End Projects Section -->


@endsection