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
    @include('components.include.adminsidebar') 
    <div class="container mt-5">
        <div class="row">
        @include('components.include.building-cards', ['buildings' => $buildings])

        <div class="button">
                <a href="{{ route('buildings.create') }}" class="btn btn-primary mx-1" id="button">
                    <i class="bi bi-plus-lg">Create Building</i> <!-- Create Building -->
                </a>
            </div>
        <!-- Correctly pass the buildings collection -->
        </div>
    </div>
@endsection
