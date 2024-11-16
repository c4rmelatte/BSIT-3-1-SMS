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
        background-color: #F3F2ED; 
        padding: 20px;
        border-radius: 10px;
        max-width: 800px;
        height: 500px; 
        margin: 50px auto; 
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); 
    }
    .button-container {
        display: flex;
        justify-content: center; 
        gap: 10px; 
        margin-top: 180px; 
    }
    #heading1, #button, #cancel {
        text-align: center; 
    }
    #heading1{
        margin-top: 20px;
    }
</style>
@extends('layout.layout')

@section('content')


    <div class="box">
            <h1 class="mt-4 text-white" id="heading1">Edit Department</h1>
            <div class="background">
                <form action="{{ route('departments.update', $department->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="name" value="{{ $department->name }}" placeholder="Name">
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="image" id="image" value="{{ $department->image }}" placeholder="Image URL">
                                <label for="image">Image</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="description" id="description" value="{{ $department->description }}" placeholder="Description">
                                <label for="description">Description</label>
                            </div>

                            <div class="button-container">
                                <button type="submit" class="btn btn-success text-white fs-4">Update Department</button>
                                <a href="{{ route('departmentdash') }}" class="btn btn-danger text-white fs-4">Cancel</a>
                            </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
