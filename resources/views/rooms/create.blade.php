@extends('layout.layout')

@section('content')
<div class="container mt-4 d-flex justify-content-center">
    <!-- Green Container -->
    <div class="p-4 rounded" style="background-color: #336356; color: white; width: 700px;">
        <h1 class="text-white text-center mb-4">Create Room</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- White Container -->
        <div class="p-4 rounded mb-4" style="background-color: white; color: black;">
            <form action="{{ route('rooms.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Room Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image URL</label>
                    <input type="url" class="form-control" id="image" name="image" required>
                </div>

                <!-- Centered Buttons -->
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn" style="background-color: #336356; color:white;">Create Room</button>
                    <a href="{{ route('roomdash') }}" class="btn btn-danger ms-3">Cancel</a>
                </div>
            </form>
        </div>
        <!-- End of White Container -->
    </div>
    <!-- End of Green Container -->
</div>
@endsection
