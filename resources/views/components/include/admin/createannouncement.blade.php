<h1 class="text-center mb-4">Create Announcement</h1>
<form action="{{ route('store_announcement') }}" method="POST">
    @csrf
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 100%; max-width: 500px;">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                <label for="title">Title</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="content" id="content" placeholder="Content" style="height: 150px;"></textarea>
                <label for="content">Content</label>
            </div>
            <button type="submit" class="btn btn-success w-50">Create Announcement</button>
        </div>
    </div>
</form>
