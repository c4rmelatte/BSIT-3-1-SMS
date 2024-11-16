@extends('layout')

@section('content')
    <h1>Create New Schedules</h1>
    <form action="/schedule" method="POST">
        @csrf
        <div id="schedules-wrapper">
            <div class="schedule-group">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title[]" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date[]" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="time">Time</label>
                    <input type="time" name="time[]" class="form-control" required>
                </div>
                <button type="button" class="btn btn-danger remove-schedule">Remove</button>
                <hr>
            </div>
        </div>
        <button type="button" class="btn btn-secondary" id="add-schedule">Add Another Schedule</button>
        <button type="submit" class="btn btn-primary">Save Schedules</button>
        <a href="/schedule" class="btn btn-secondary">Back to Schedule List</a>
    </form>

    <script>
        // JavaScript to handle adding/removing schedule input groups
        document.getElementById('add-schedule').addEventListener('click', function () {
            let scheduleGroup = document.querySelector('.schedule-group').cloneNode(true);
            scheduleGroup.querySelectorAll('input').forEach(input => input.value = '');
            document.getElementById('schedules-wrapper').appendChild(scheduleGroup);
        });

        document.getElementById('schedules-wrapper').addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-schedule')) {
                e.target.closest('.schedule-group').remove();
            }
        });
    </script>
@endsection