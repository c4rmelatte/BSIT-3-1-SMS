<h1 class="text-center mb-4">Create Purpose</h1>
<form action="{{ route('store_purpose') }}" method="POST">
    @csrf
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 100%; max-width: 450px;">
            <div class="mb-4">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
            <div class="mb-4">
                <input type="number" class="form-control" name="price" id="price" placeholder="Price">
            </div>
            <button type="submit" class="btn btn-success w-50">Create Purpose</button>
        </div>
    </div>
</form>
