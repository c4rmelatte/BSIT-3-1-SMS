<!-- UNDER CONSTRUCTION -->
<div class="container">
    <h1>Edit Purpose</h1>
    <form action="{{ route('update_purpose', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Purpose</button>
    </form>
</div>
