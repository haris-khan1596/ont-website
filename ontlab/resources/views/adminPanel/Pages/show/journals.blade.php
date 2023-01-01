@php
    $publications=DB::table('publications')->select('*')->where('type', '=', 'journal')->get();
    $count=0;
@endphp
<section class="section">

  <div class="card">
      <div class="card-body">
        <h5 class="card-title">Journal Papers</h5>
<table id="dataTable" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Authors</th>
      <th scope="col">Year</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($publications as $pubs)
    <tr>
      <th scope="row">{{++$count}}</th>
      <td>{{$pubs->title}}</td>
      <td>{{$pubs->author}}</td>
      <td>{{$pubs->year}}</td>
      <td><a href="#">edit</a>/<a href="">delete</a></td>
    </tr>
    @endforeach

  </tbody>
</table>