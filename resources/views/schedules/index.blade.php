@extends('layout')

@section('content')
    <h1>Schedules</h1>
    <a href="/schedule/create" class="btn btn-primary">Create Schedule</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->title }}</td>
                    <td>{{ $schedule->date }}</td>
                    <td>{{ $schedule->time }}</td>
                    <td>
                        <a href="/schedule/{{ $schedule->id }}" class="btn btn-info btn-sm">View</a>
                        <a href="/schedule/{{ $schedule->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/schedule/{{ $schedule->id }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
