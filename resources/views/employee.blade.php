<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<div class="container">
<table class="table table-dark table-hover">
  <tr><th>ID</th>
  <th>Name</th>
  <th>Email</th>
  <th>Phone</th>
  <th>Salary</th>
  <th>Department</th>
  </tr>
  @foreach($data as $value)
  <tr><td>{{$value->id}}</td>
  <td>{{$value->name}}</td>
  <td>{{$value->email}}</td>
  <td>{{$value->phone}}</td>
  <td>{{$value->salary}}</td>
  <td>{{$value->department}}</td>
  </tr>
  @endforeach
</table>
</div>