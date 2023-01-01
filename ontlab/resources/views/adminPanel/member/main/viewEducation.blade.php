@php
    $education=DB::table('education')->select('*')->where('m_id', '=', $id)->get();
@endphp
<table id="dataTable" class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Start Year</th>
        <th scope="col">End Year</th>
        <th scope="col">Degree</th>
        <th scope="col">Institue</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($education as $edu)
      <tr>
        <th scope="row">1</th>
        <td>{{$edu->start}}</td>
        <td>{{$edu->end}}</td>
        <td>{{$edu->degree}}</td>
        <td>{{$edu->institute}}</td>
        <td><a href="">edit</a></td>
      </tr>          
      @endforeach

    </tbody>
  </table>