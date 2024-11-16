
   <style>
    #button{
        position: absolute; 
        top: 140px;
        left: 467px;
        background-color:#9A9D5A;
    }
</style>


@extends('layout.layout')  <!-- Your main layout file -->

@section('content')
    @include('components.include.adminnavbar')  <!-- Include the admin navbar -->
    @include('components.include.adminsidebar')  <!-- Include the admin sidebar -->

    <div class="container mt-5">
        <div class="row">
            @include('components.include.department-cards', ['departments' => $departments])  <!-- Pass departments to the cards -->
             <!-- Centered Actions Container -->
             <div class="align-items-center mx-auto" >
                <a href="{{ route('departments.create') }}" class="btn btn-primary mx-1" id="button">
                    <i class="bi bi-plus-lg">Create Department</i> <!-- Create Department -->
                </a>
            </div>
        </div>
    </div>
@endsection
