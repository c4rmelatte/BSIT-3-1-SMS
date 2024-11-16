@extends('elements.layout')

@section('content')
@include('include.teachersidebar')

<style>
    .containerr {
        width: 70%;
        position: fixed;
        left: 340px;
        z-index: 1000;
        top: 100px;
    }

    .form-container {
        background-color: #90BDB1;
        color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
        color: #37584F;
    }

    .form-control, .btn {
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
    }

    .btn-primary {
        background-color: #37584F;
        border-color: #37584F;
        font-weight: bold;
    }

    /* Header Styles */
    .padding {
        padding-bottom: 20px;
        color: #37584F;
        font-weight: bold;
    }

    .course-title {
        font-weight: bold;
        font-size: 30px;
        color: #70897E;
        margin-left: 20px;
    }

    .course-section {
        font-size: 27px;
        color: #70897E;
        margin-top: 5px;
        margin-left: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }

</style>

<div class="containerr">
    <h1 class="padding">Create Activity</h1>
    <div class="course-title">ITPC13 - SYSTEM ANALYSIS AND DESIGN</div>
    <div class="course-section">BSIT 3-1</div>

    <div class="form-container">
        <form action="/create-activity" method="POST">
            @csrf <!-- Add CSRF token for security -->

            <div class="form-group">
                <label for="activityName" class="form-label">Name of the Activity</label>
                <input type="text" id="activityName" name="activityName" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="activityType" class="form-label">Type of Activity</label>
                <select id="activityType" name="activityType" class="form-control" required>
                    <option value="Assignment">Assignment</option>
                    <option value="Quiz">Quiz</option>
                    <option value="Exam">Exam</option>
                </select>
            </div>

            <div class="form-group">
                <label for="term" class="form-label">Term</label>
                <input type="text" id="term" name="term" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="maxScore" class="form-label">Max Score</label>
                <input type="number" id="maxScore" name="maxScore" class="form-control" min="0" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Activity</button>
        </form>
    </div>
</div>

@endsection
