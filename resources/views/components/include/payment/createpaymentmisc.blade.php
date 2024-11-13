<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>

    <style>
        body{
            height: 100%;
            margin: 0;
        }

        .container {
            background-color: aliceblue;
            max-width: 500px;
            height: 300px;
            display: block;
            margin-top: 400px;
            margin-left: 40%;

        }

        .card{
            display:flex;
            flex-direction: column;
            align-items: center;

        }

        .purps{
            display: flex;
            align-items: center;
            margin-left: 80px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Create Payment</h2>
        <form action="{{ route('start_payment_misc') }}" method="POST">
        @csrf
        <div class="purps">
            <label for="product">Select a product:</label>
    <select id="product" name="product_name">
        @foreach($products as $product)
            <option value="{{ $product->name }}">{{ $product->name }}</option>
        @endforeach
    </select>
        </div>
        <div class="card">
            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount" placeholder="Amount">
            <button type=submit>Pay now</button>
        </div>
        </form>
    </div>
</body>
</html>