<div class="container">
    <h1>Edit Purpose</h1>
    <form action="{{ route('update_payment', $payment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $payment->price }}">
        </div>
        <div class="mb-3">
            <label for="purpose" class="form-label">Purpose</label>
            <input type="text" class="form-control" id="purpose" name="purpose" value="{{ $payment->purpose }}">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount" value="{{ $payment->amount }}">
        </div>
        <div class="mb-3">
            <label for="change" class="form-label">Change</label>
            <input type="number" class="form-control" id="change" name="change" value="{{ $payment->change }}">
        </div>
        <div class="mb-3">
            <label for="isPaid" class="form-label">isPaid</label>
            <input type="number" class="form-control" id="isPaid" name="isPaid" value="{{ $payment->isPaid }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Purpose</button>
    </form>
</div>
