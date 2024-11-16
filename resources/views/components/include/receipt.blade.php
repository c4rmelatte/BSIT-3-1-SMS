<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <style>
        /* Add some basic styling */
        .receipt-container {
            width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
            font-family: Arial, sans-serif
        }
        
        
        .receipt-details th, .receipt-details td {
            padding: 8px;
            text-align: left;
        }
        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="receipt-container rounded   ">
        <h1>Receipt</h1>
        <div class="text-end mt-4 mb-4">
        <p><strong>Receipt ID:</strong> #{{ $payment->id }}</p>
        <p><strong>Student name:</strong> {{ $payment->name }}</p>
        <p><strong>Date:</strong> {{ $payment->created_at->format('d/m/Y') }}</p>

        </div>
        <div class="receipt-details ">
        <div class="card mb-5">

        <div class="receipt-details">
            <table>
                <tr>
                    <th>Amount Paid</th>
                    <td>P{{ number_format($payment->amount, 2) }}</td>
                </tr>
                <tr>
                    <th>Purpose</th>
                    <td>{{ $payment->purpose }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{ $payment->price }}</td>
                </tr>
                <tr>
                    <th>Change</th>
                    <td>P{{ number_format($payment->change, 2) }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $payment->isPaid ? 'Paid' : 'Pending' }}</td>
                </tr>
            </table>
        </div>

        
    </div>

    <div class="total">
            <p><strong>Total Amount:</strong> P{{$payment->amount-$payment->change}}</p>
        </div>
</body>
</html>

