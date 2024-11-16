<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

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
            width: 400px;
            padding: 20px;
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
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h2>Create Payment</h2>
        <form action="{{ route('start_payment_tuit') }}" method="POST">
            @csrf
            <div class="purps">
                <label for="product">Select a Semester:</label>
                <select id="product" name="semester">
                    <option value="firstSem">1st Semester</option>
                    <option value="secondSem">2nd Semester</option>
                    <option value="summer">Summer</option>
                </select>
            </div>
            <div class="card mt-5">
                <label for="amount">Amount:</label>
                <input type="text" name="amount" id="amount" placeholder="Required: ₱15,000">
                <button type="submit" class="btn-primary mt-4">Pay Now</button>
            </div>
        </form>
    </div>
</body>
</html>
