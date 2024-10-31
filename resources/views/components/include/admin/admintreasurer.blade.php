<div class="purpose_table d-flex justify-content-center align-items-start mt-5 ">
<div class="card d-flex justify-content-center align-items-center w-75  p-3 mb-4 mt-5 ">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach (json_decode($products) as $product)
    <tr class="text-white" style="background:#c40000;">
      <td>{{$product->id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>      <a href="#" class="btn btn-success">Edit</a>
      <br><br><form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
              </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>


<div class="announcement d-flex justify-content-center align-items-start">
<div class="card d-flex justify-content-center align-items-center w-75 mx-auto p-3 mb-4" >
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach (json_decode($announcements) as $announcement)
    <tr class="text-white" style="background:#c40000;">
      <td>{{ $announcement->id}}</td>
      <td>{{ $announcement->title}}</td>
      <td>{{ $announcement->content}}</td>
      <td>      <a href="{{url ('announcements/{id}/edit',['id' => $announcement->id])}}" class="btn btn-success">Edit</a>
      <br><br><form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
              </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>


<div class="paidtable d-flex justify-content-center align-items-start ms-5" >
<div class="card d-flex justify-content-center align-items-center w-100 ms-5 mx-auto p-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Amount</th>
      <th scope="col">Balance</th>
      <th scope="col">Change</th>
      <th scope="col">isPaid</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach (json_decode($payments) as $payment)
    <tr class="text-white" style="background:#c40000;">
      <td>{{ $payment->id}}</td>
      <td>{{ $payment->name}}</td>
      <td>{{ $payment->price}}</td>
      <td>{{ $payment->amount}}</td>
      <td>{{ $payment->balance}}</td>
      <td>{{ $payment->change}}</td>
      <td>{{ $payment->isPaid}}</td>
      <td>{{ $payment->created_at}}</td>
      <td>{{ $payment->updated_at}}</td>
      <td>      <a href="#" class="btn btn-success">Edit</a>
      <br><br><form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
              </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>