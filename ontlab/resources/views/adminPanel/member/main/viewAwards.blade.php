@php
    $awards=DB::table('awards')->select('*')->where('m_id', '=', $id)->get();
@endphp
<table id="dataTable" class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Year</th>
        <th scope="col">Title</th>
        <th scope="col">Oranization</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($awards as $award)
      <tr>
        <th scope="row">1</th>
        <td>{{$awards->year}}</td>
        <td>{{$awards->title}}</td>
        <td>{{$awards->organization}}</td>
        <td><a href="#">edit</a></td>
      </tr>          
      @endforeach

    </tbody>
  </table>