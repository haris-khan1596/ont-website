@php
    $domains=DB::table('domains')->select('*')->get();
    $count=0;
@endphp
<section class="section">

  <div class="card">
      <div class="card-body">
        <h5 class="card-title">Research Domains</h5>
<table id="dataTable" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">icon</th>
      <th scope="col">Name</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($domains as $domain)
    <tr>
      <th scope="row">{{++$count}}</th>
      <td><i class="{{$domain->icon}}"></i></td>
      <td>{{$domain->name}}</td>
      <td><a href="{{url('research/'.$domain->d_id)}}">view</a>/<a href="#">edit</a></td>
    </tr>
    @endforeach

  </tbody>
</table>