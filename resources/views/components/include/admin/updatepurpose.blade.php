
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
    
    <div class="container d-flex justify-content-center align-items-center" style="margin-left: 110px; margin-top: 100px;">
        <form action="{{ route('update_purpose', $product->id) }}" method="POST" class="form-container" style="width: 100%; max-width: 600px; height: 500px;">
            @csrf
            @method('PUT')
            <h1 class="text-center mt-5 pb-6">Edit Purpose</h1>

            <div class=" p-4 mb-6 text-center">
                
                <div class="mb-3">
                    <label for="title" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
                </div>
                    <button type="submit" class="btn btn-success">Update Purpose</button>
            </div>
        </form>
    </div>
</body>
</html>