@extends('enrollment')



@section('content')

    @include('layouts.adminnav')
<div class="container mt-4">
    <h2 class="text-center mb-4">College Enrollment</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('enrollment.college.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="year" class="form-label">Year:</label>
                        <select class="form-select" id="year" name="year" required>
                            <option value="">Select Year</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="semester" class="form-label">Semester:</label>
                        <select class="form-select" id="semester" name="semester" required>
                            <option value="">Select Semester</option>
                            <option value="1st Semester">1st Semester</option>
                            <option value="2nd Semester">2nd Semester</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="room" class="form-label">Room:</label>
                        <input type="text" class="form-control" id="room" name="room" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="subjects" class="form-label">Subjects:</label>
                    <div class="row">
                        @for ($i = 1; $i <= 8; $i++)
                            <div class="col-md-6 mb-2">
                                <select class="form-select" id="subject{{$i}}" name="subjects[]" required>
                                    <option value="">Select Subject {{$i}}</option>
                                    <option value="Math">Math</option>
                                    <option value="Science">Science</option>
                                    <option value="English">English</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                    <option value="PE">Physical Education</option>
                                    <option value="Arts">Arts</option>
                                    <option value="Music">Music</option>
                                </select>
                            </div>
                        @endfor
                    </div>
                </div>
                <button type="submit" class="btn btn-block" style="background-color: #E8CE83; color: #000;">Enroll Student</button>
            </form>
        </div>
    </div>
</div>
@endsection
