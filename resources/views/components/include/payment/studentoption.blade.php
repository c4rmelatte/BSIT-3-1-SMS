
    <style>
        body {
            background-color: white;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .containing {
            max-width: 600px;
            margin: 100px auto;
        }

        .cardko {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #37584F;
            padding: 30px;
        }

        .cardko h2 {
            color: white; 
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .cardko a {
            display: block;
            color: white;
            font-size: 18px;
            margin: 10px 0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .cardko a:hover {
            color: #c9b13d; 
        }

        hr {
            border: 0;
            border-top: 4px solid black;  
            margin: 20px 0; 
        }
    </style>

</head>
<body>

    <div class="containing" >
        <div class="cardko">
            <div class="box">
                <h2>Miscellaneous</h2>
                <a href="{{ route('pay_misc') }}" class="mb-4">Pay here</a>
                <hr>
                <h2>Tuition</h2>
                <a href="{{route('pay_tuit')}}">Pay here</a>
            </div>
        </div>
    </div>

</body>
</html>