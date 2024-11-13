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
        <div class="card">
            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount" placeholder="Required: ₱15,000">
            <button type=submit>Pay now</button>
        </div>
        </form>
    </div>
</body>
</html>