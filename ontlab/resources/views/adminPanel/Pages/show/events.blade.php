@php
    $events=DB::table('events')->select('*')->get();
    $count=0;
@endphp
<section class="section">

  <div class="card">
      <div class="card-body">
        <h5 class="card-title">Events</h5>
<table id="dataTable" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">date</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($events as $event)
    <tr>
      <th scope="row">{{++$count}}</th>
      <td>{{$event->title}}</td>
      <td>{{$event->timmings}}</td>
      <td><a href="{{url('events/'.$event->event_id)}}">view</a>/<a href="#">edit</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>