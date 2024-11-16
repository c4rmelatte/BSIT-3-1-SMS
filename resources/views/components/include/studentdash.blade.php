<br>
<br>

    
@php

$postedAnnouncements = collect(json_decode($announcements))->filter(function ($announcement) {
    return $announcement->posted === 1;
});
@endphp


@if ($postedAnnouncements->isNotEmpty())
<div class="announcement d-flex justify-content-center align-items-center mb-4" style="margin-top: 50px;">
    <div class="w-75 mx-auto p-3 mb-4 border rounded-5 ">
        <h5 class="text-black">Announcements</h5>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col" style="width: 33.3%;">Title</th>
                    <th scope="col" style="width: 33.3%;">Content</th>
                    <th scope="col" style="width: 33.3%;">Time Posted</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postedAnnouncements as $announcement)
                    <tr class="text-white" style="background:#c40000;">
                        <td>{{ $announcement->title }}</td>
                        <td>{{ $announcement->content }}</td>
                        <td>{{ Carbon\Carbon::parse($announcement->created_at)->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif



<div class="ms-5" style="margin-top: 90px;">
<div class="tabs ms-5">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active text-black" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Create Payment</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link text-black" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Payment History</button>
  </li>
  
</ul>
</div>  
</div>


<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        @include('components.include.payment.studentoption')
  </div>



  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
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

  </div>


