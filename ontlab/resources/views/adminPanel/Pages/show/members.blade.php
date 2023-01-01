@php
    $members=DB::table('member')->select('*')->get();
    $count=0;
@endphp
<section class="section">

  <div class="card">
      <div class="card-body">
        <h5 class="card-title">Team Members</h5>
<table id="dataTable" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Picture</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($members as $member)
    <tr>
      <th scope="row">{{++$count}}</th>
      <td><img src="{{url($member->img)}}" alt="prof_pic" class="table-img"></td>
      <td>{{$member->name}}</td>
      <td>{{$member->desgination}}</td>
      <td><a href="{{url('/team/u/'.$member->m_id)}}">view</a>/<a href="">edit</a></td>
    </tr> 
    @endforeach

  </tbody>
</table>