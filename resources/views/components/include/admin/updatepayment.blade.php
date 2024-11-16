
    <style>
        .form-container {
            background-color: #38574E; 
            color: #ffffff; 
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }

        .pb-6 {
            padding-bottom: 70px;
        }

        .card {
            background-color: #ffffff; 
            color: #38574E; 
        }

        .mb-6 {
            margin-bottom: 180px;
        }
    </style>
</head>
<body>
    
    <div class="container d-flex justify-content-center align-items-center vh-50" style="margin-left: 110px;">
        <form action="{{ route('update_payment', $payment->id) }}" method="POST" class="form-container mt-5" style="width: 100%; max-width: 700px; height:700px;">
            @csrf
            @method('PUT')
            <h1 class="text-center mt-5 pb-4">Edit Payment</h1>

            <div class="p-4 mb-6 text-center">
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $payment->price }}">
                </div>
                <div class="mb-3">
                    <label for="purpose" class="form-label">Purpose</label>
                    <input type="text" class="form-control" id="purpose" name="purpose" value="{{ $payment->purpose }}">
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" class="form-control" id="amount" name="amount" value="{{ $payment->amount }}">
                </div>
                <div class="mb-3">
                    <label for="change" class="form-label">Change</label>
                    <input type="number" class="form-control" id="change" name="change" value="{{ $payment->change }}">
                </div>
                <div class="mb-3">
                    <label for="isPaid" class="form-label">isPaid</label>
                    <input type="number" class="form-control" id="isPaid" name="isPaid" value="{{ $payment->isPaid }}">
                </div>

                <button type="submit" class="btn btn-success mt-3">Update Payment</button>
            </div>
        </form>
    </div>
</body>
</html>
