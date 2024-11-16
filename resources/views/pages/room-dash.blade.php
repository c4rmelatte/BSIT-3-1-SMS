<style>
    .button{
        position: absolute; 
        top: 150px;
        left: 340px;
    }
</style>

@extends('layout.layout')  <!-- Your main layout file -->

@section('content')
    @include('components.include.adminnavbar')  <!-- Include the admin navbar -->
    @include('components.include.adminsidebar')  <!-- Include the admin sidebar -->

    <div class="container">
        <div class="row">
            @include('components.include.room-dash', ['rooms' => $rooms])
        </div>
    </div>
    <div class="button">
        <div class="d-flex justify-content-center mb-3">
                    <a href="{{ route('rooms.create') }}" class="btn btn-action btn-lg" style="background-color: #336356; color: white;">Create Room</a>

        </div>    
    </div>
    

    
@endsection
