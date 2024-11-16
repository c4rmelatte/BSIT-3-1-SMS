@extends('layout')

@section('content')
    <h1>Edit Schedule</h1>
    <form action="/schedule/{{ $schedule->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $schedule->title }}" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ $schedule->date }}" required>
        </div>
        <div class="form-group">
            <label for="time">Time</label>
            <input type="time" name="time" id="time" class="form-control" value="{{ $schedule->time }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Schedule</button>
        <a href="/schedule" class="btn btn-secondary">Back to Schedule List</a>
    </form>
@endsection