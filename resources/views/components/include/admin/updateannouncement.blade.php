
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
    <div class="container d-flex justify-content-center align-items-center vh-100" style="margin-left: 110px;   ">
        <div class="form-container" style="width: 100%; max-width: 600px; height: 600px;">
            <h1 class="text-center mb-4">Edit Announcement</h1>
            <form action="{{ route('update_announcement', $announcement->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $announcement->title }}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="4">{{ $announcement->content }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="posted" class="form-label">Posted</label>
                    <select class="form-control" id="posted" name="posted">
                        <option value="1" {{ $announcement->status == '1' ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ $announcement->status == '0' ? 'selected' : '' }}>No</option>
                    </select>
                    <button type="submit" class="btn btn-success w-50 mt-4">Update Announcement</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
