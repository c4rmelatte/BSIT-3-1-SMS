<div class="announcement d-flex justify-content-center align-items-start" style="margin-top: 150px;">
<div class="card d-flex justify-content-center align-items-center w-75 mx-auto p-3 mb-4" >
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Logged In</th>
      <th scope="col">Logged Out</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
 @foreach (json_decode($records) as $record)
    <tr class="text-white" style="background:#c40000;">
      <td>{{ $record->id}}</td>
      <td>{{ $record->name}}</td>
      <td>{{ $record->logged_in}}</td>
      <td>{{ $record->logged_out}}</td>
      <td>{{ \Carbon\Carbon::parse($record->date)->format('d/m/Y') }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>