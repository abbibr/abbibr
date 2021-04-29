<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<div class="container">
<table class="table table-dark table-hover">
  <tr><th>ID</th>
  <th>Name</th>
  <th>Email</th>
  <th>Phone</th>
  <th>Salary</th>
  <th>Department</th>
  <th>Download PDF</th>
  </tr>
  <tr><td>{{$data->id}}</td>
  <td>{{$data->name}}</td>
  <td>{{$data->email}}</td>
  <td>{{$data->phone}}</td>
  <td>{{$data->salary}}</td>
  <td>{{$data->department}}</td>
  <td><a href="/load/{{$data->id}}" class="btn btn-info">Download</a></td>
  </tr>
</table>
</div>