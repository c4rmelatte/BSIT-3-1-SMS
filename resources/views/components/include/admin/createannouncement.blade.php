<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Create Announcement</title>
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
        <form action="{{ route('store_announcementAdmin') }}" method="POST" class="form-container" style="width: 100%; max-width: 600px;">
            @csrf
            
            <h1 class="text-center mt-5 pb-6">Create Announcement</h1>

            
            <div class="card p-4 mb-6 text-center">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                    <label for="title">Title</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" name="content" id="content" placeholder="Content" style="height: 150px;" required></textarea>
                    <label for="content">Content</label>
                </div>

                
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success w-50">Create Announcement</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
