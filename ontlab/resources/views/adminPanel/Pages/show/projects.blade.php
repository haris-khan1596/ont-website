@php
    $projects=DB::table('projects')->select('*')->get();
    $count=0;
@endphp
<section class="section">

  <div class="card">
      <div class="card-body">
        <h5 class="card-title">Projects</h5>
<table id="dataTable" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $project)
    <tr>
      <th scope="row">{{++$count}}</th>
      <td>{{$project->title}}</td>
      <td><a href="{{url('projects/'.$project->proj_id)}}">view</a>/<a href="#">edit</a></td>
    </tr>
    @endforeach

  </tbody>
</table>