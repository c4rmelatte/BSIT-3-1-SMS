<!-- <h1>Payment History</h1> -->

<div class="purpose_table d-flex justify-content-center align-items-start mt-5 ">
<div class="card d-flex justify-content-center align-items-center w-75  p-3 mb-4 mt-5 ">
<table class="table">
<tr>
      <th scope="col">Price</th>
      <th scope="col">Amount</th>
      <th scope="col">Change</th>
      <th scope="col">Type</th>
      <th scope="col">Created</th>
      <th scope="col">Action</th>
    </tr>
    @foreach ($payments as $payment)
    <tr>
        <td>{{$payment->purpose}}</td>
        <td>{{ $payment->amount }}</td>
        <td>{{ $payment->change }}</td>
        <td>{{ $payment->type }}</td>
        <td>{{ $payment->created_at }}</td>
        <td><a href="{{route("get_receipt" ,  $payment->id)}}" class="btn btn-success">Get Receipt</a></td>
    </tr>
    @endforeach
</table>
</div>
</div>
