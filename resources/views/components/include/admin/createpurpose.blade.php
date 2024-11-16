
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
    
    <div class="container d-flex justify-content-center align-items-center vh-100" style="margin-left: 110px;">
        <form action="{{ route('store_purpose') }}" method="POST" class="form-container" style="width: 100%; max-width: 600px;">
            @csrf
            
            <h1 class="text-center mt-5 pb-6">Create Purpose</h1>

            <div class="card p-4 mb-5 text-center">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                    <label for="name">Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="price" id="price" placeholder="Price" required>
                    <label for="price">Price</label>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success w-50">Create Purpose</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>