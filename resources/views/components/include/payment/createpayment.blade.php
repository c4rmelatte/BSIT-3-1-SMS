<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Create Payment</title>
    <style>
        
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f7f9fa;
            color: #333;
            font-family: Arial, sans-serif;
        }

       
        .container {
            background-color: #37584F;
            color: #ffffff;
            max-width: 500px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

       
        .card {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
        }

        .form-label {
            font-weight: bold;
        }

        
        select, input[type="text"] {
            background-color: #fff;
            color: #333;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            margin-top: 5px;
        }

        
        .btn-primary {
            background-color: #ffffff;
            color: #37584F;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #e8f5f0;
            color: #37584F;
        }

        
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h2>Create Payment</h2>
        <form action="{{ route('start_payment') }}" method="POST">
            @csrf

            
            <div class="mb-3">
                <label for="product" class="form-label">Select a product:</label>
                <select id="product" name="product_name" class="form-select">
                    @foreach($products as $product)
                        <option value="{{ $product->name }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            
            <div class="card">
                <label for="amount" class="form-label">Amount:</label>
                <input type="text" name="amount" id="amount" placeholder="Enter amount" required>
            </div>

            
            <button type="submit" class="btn btn-primary mt-4">Pay Now</button>
        </form>
    </div>
</body>
</html>
