<style>
    .background {
        background-color: #F3F2ED; 
        padding: 20px;
        border-radius: 10px;
        max-width: 800px;
        height: 500px; 
        margin: 50px auto; 
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); 
    }

    .box {
        max-width: 900px; 
        height: 700px;
        margin: 50px auto; 
        padding: 20px; 
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
        background-color: #37584F; /* Background color for contrast */
    }

    .button-container {
        display: flex;
        justify-content: center; 
        gap: 10px; 
        margin-top:50px; 
    }
h2 {
    text-align: center;
}

</style>

@extends('layout.layout')

@section('content')
<div class="container mt-5">
    
    
    <!-- Display error message if there's a duplicate -->
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

        <div class="box">
            <div class="background">

                <h2>Create Department</h2>
                <form action="{{ route('departments.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Department Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="image" class="form-label">Image URL</label>
                        <input type="url" class="form-control" id="image" name="image" placeholder="https://example.com/image.jpg">
                    </div>

                    <div class="button-container"> 
                        <button type="submit" class="btn btn-success text-white fs-4">Create Department</button>
                        <a href="{{ route('departmentdash') }}" class="btn btn-danger text-white fs-4">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection
