@extends('layout.layout')  <!-- Your main layout file -->

<style>

    .box {
        max-width: 900px; 
        height: 700px;
        margin: 50px auto; 
        padding: 20px; 
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
        background-color: #37584F; /* Background color for contrast */
    }
    .background {
        background-color: #F3F2ED; /* Light gray background */
        padding: 20px;
        border-radius: 10px;
        max-width: 800px;
        height: 500px; /* Set a max width for the form container */
        margin: 50px auto; /* Center the box on the page */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
    }
    .button-container {
        display: flex;
        justify-content: center; /* Center-aligns the buttons */
        gap: 10px; /* Adds space between the buttons */
        margin-top: 20px; /* Optional: Adds some top margin */
    }
    #heading1, #button, #cancel {
        text-align: center; 
    }
    #heading1{
        margin-top: 30px;
    }
</style>

@section('content')
<div class="container">
    

    <!-- Display success or error messages -->
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


    <div class="box">
        <h1 class="mt-4 text-white" id="heading1">Create Building</h1>
            <div class="background">
                <form action="{{ route('buildings.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Building Name</label>
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
                    <div class="mb-3">
                        <label for="department_id" class="form-label">Department</label>
                        <select class="form-select" id="department_id" name="department_id" required>
                            <option value="">Select a Department</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="button-container">
                    <button type="submit" class="btn btn-success text-white fs-4"  id="button">Create Building</button>
                    <a href="{{ route('buildingdash') }}" class="btn btn-danger text-white fs-4"  id="cancel">Cancel</a>
                    </div>
                </form>
            </div>
    </div>
</div>
@endsection
