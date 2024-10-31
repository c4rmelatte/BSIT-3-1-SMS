@section('content')


<!-- UNDER CONSTRUCTION -->
<div class="container">
    <h1>Edit Announcement</h1>
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
        <button type="submit" class="btn btn-primary">Update Announcement</button>
    </form>
</div>
@endsection
