@extends('layout.layout')
<h1>admin</h1>

@section('content')
    @include('components.include.adminnavbar')
    @include('components.include.adminsidebar')
    @include('components.include.admin.admintreasurer')
@endsection