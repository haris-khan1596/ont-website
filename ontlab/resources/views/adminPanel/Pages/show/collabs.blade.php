@php
    $collaborators=DB::table('collaborators')->select('*')->get();
    $count=0;
@endphp
<section class="section">

  <div class="card">
      <div class="card-body">
        <h5 class="card-title">Collaborators</h5>
<table id="dataTable" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($collaborators as $collabs)
    <tr>
      <th scope="row">{{++$count}}</th>
      <td><img src="{{url($collabs->icon)}}" alt="" class="table-img"></td>
      <td>{{$collabs->name}}</td>
      <td><a href="#">delete</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>