<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: white;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 250px auto;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #37584F;
            padding: 30px;
        }

        .card h2 {
            color: white; 
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .card a {
            display: block;
            color: white;
            font-size: 18px;
            margin: 10px 0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .card a:hover {
            color: #c9b13d; 
        }

        hr {
            border: 0;
            border-top: 4px solid black;  
            margin: 20px 0; 
        }
    </style>
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="box">
                <h2>Miscellaneous</h2>
                <a href="{{ route('pay_misc') }}" class="mb-4">Pay here</a>
                <hr>
                <h2>Tuition</h2>
                <a href="{{url('/payment')}}">Pay here</a>
            </div>
        </div>
    </div>

</body>
</html>
