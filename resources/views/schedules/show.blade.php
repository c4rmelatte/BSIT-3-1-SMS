@extends('layout')

@section('content')
    <h1>{{ $schedule->title }}</h1>
    <p>Date: {{ $schedule->date }}</p>
    <p>Time: {{ $schedule->time }}</p>
    <a href="/schedule" class="btn btn-secondary">Back to Schedule List</a>
@endsection