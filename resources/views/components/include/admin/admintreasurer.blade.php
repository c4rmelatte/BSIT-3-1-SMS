

<div class="d-flex justify-content-center align-items-start" style="height: 50vh; padding-top: 50px; margin-top: 100px;">
    <div class="totalFunds w-50 p-2 text-center border rounded bg-light">
        <p class="h3 text-dark font-weight-bold"><strong>Total Funds:</strong> ₱ {{ number_format($funds->funds, 2) }}</p>
    </div>
</div>


<div class="ms-4" style="margin-top: -200px;">
<div class="tabs ms-5 justify-content-sm-center">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active text-black" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Purpose</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link text-black" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Announcement</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link text-black" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Payments</button>
  </li>
</ul>
</div>
</div>


<div class="tab-content" id="myTabContent">
  <!-- ********************************purpose ****************************-->
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
  <div class="purpose_table d-flex justify-content-center align-items-start mt-4">
<div class="card d-flex justify-content-center align-items-center w-75  p-3 ">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach (json_decode($products) as $product)
    <tr class="text-white" style="background:#c40000;">
      <td>{{$product->id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{ $product->created_at}}</td>
      <td>{{ $product->updated_at}}</td>
      <td>      <a href="{{route('edit_purpose', $product->id)}}" class="btn btn-success">Edit</a>
 <form action="{{route('delete_purpose', $product->id)}}" method="POST" style="display:inline;">
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



  </div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">


  <!--*********************** announcement *******************************-->
  <div class="announcement d-flex justify-content-center align-items-start mt-4">
<div class="card d-flex justify-content-center align-items-center w-75 mx-auto p-3 mb-4" >
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Posted</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach (json_decode($announcements) as $announcement)
    <tr class="text-white" style="background:#c40000;">
      <td>{{ $announcement->id}}</td>
      <td>{{ $announcement->title}}</td>
      <td>{{ $announcement->content}}</td>
      <td>{{ $announcement->posted}}</td>
      <td>{{ $announcement->created_at}}</td>
      <td>{{ $announcement->updated_at}}</td>
      <td>      <a href="{{route('edit_announcement', $announcement->id)}}" class="btn btn-success">Edit</a>
      <form action="{{route('delete_announcement', $announcement->id)}}" method="POST" style="display:inline;">
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
  </div>


  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

  <!--*********************** payment********************** -->
  <div class="paidtable d-flex justify-content-center align-items-start ms-5 mt-4" >
<div class="card d-flex justify-content-center align-items-center w-100 ms-5 mx-auto p-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Purpose</th>
      <th scope="col">Price</th>
      <th scope="col">Amount</th>
      <th scope="col">Change</th>
      <th scope="col">Type</th>
      <th scope="col">IsPaid</th>
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
      <td>{{ $payment->purpose}}</td>
      <td>{{ $payment->price}}</td>
      <td>{{ $payment->amount}}</td>
      <td>{{ $payment->change}}</td>
      <td>{{ $payment->type}}</td>
      <td>{{ $payment->isPaid}}</td>
      <td>{{ $payment->created_at}}</td>
      <td>{{ $payment->updated_at}}</td>
      <td>      <a href="{{route('edit_payment',$payment->id)}}" class="btn btn-success ">Edit</a>
      <form action="{{route('delete_payment', $payment->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger "
                                onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
              </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
  </div>
</div>


