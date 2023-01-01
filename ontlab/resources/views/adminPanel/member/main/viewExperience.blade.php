@php
    $experiences=DB::table('experiences')->select('*')->where('m_id', '=', $id)->get();
@endphp
<table id="dataTable" class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Start Year</th>
        <th scope="col">End Year</th>
        <th scope="col">Designation</th>
        <th scope="col">Organization</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($experiences as $exp)
      <tr>
        <th scope="row">1</th>
        <td>{{$exp->start}}</td>
        <td>{{$exp->end}}</td>
        <td>{{$exp->designation}}</td>
        <td>{{$exp->institute}}</td>
        <td><a href="#">edit</a></td>
      </tr>
      @endforeach

    </tbody>
  </table>