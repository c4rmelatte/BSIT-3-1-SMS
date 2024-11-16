@extends('elements.layout')

@section('content')
@include('include.studentsidebar')

<style>
    .containerr {
        width: 70%;
        position: fixed;
        left: 340px;
        z-index: 1000;
        top: 100px;
        margin-top: 30px;
    }

    .grid-container {
        display: grid;
        grid-template-columns: 1fr auto; 
        gap: 20px;
        align-items: center;
        background-color: #90BDB1;
        color: white;
        height: 100px;
        font-size: 30px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        margin-bottom: 20px;
    }

    .activity-text {
        text-align: left; 
        color: white;
    }

    .col {
        background-color: white;
        color: black;
        height: 100%;
        width: 70px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        font-weight: bold;
    }

    .padding {
        padding-bottom: 20px;
        color: #37584F;
        font-weight: bold;
    }

    .padding-left {
        padding-left: 30px;
        color: #70897E;
    }

    .dropdown {
        display: inline-block; 
        margin-right: 40px; 
        margin-bottom: 20px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }

    /* Set a fixed width for dropdown buttons */
    .dropdown-toggle {
        width: 200px; 
        white-space: nowrap; 
    }
</style>

<div class="containerr">
    <h1 class="padding">View Activities</h1>
    <h3 class="padding padding-left"> ITPC13 - SYSTEM ANALYSIS AND DESIGN </h3>
    <div class="container text-center">

        <div class="dropdown">
            <button id="quarterTermButton" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Quarter/Term
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" onclick="updateButtonText('quarterTermButton', 'All')">All</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateButtonText('quarterTermButton', 'Prelim')">Prelim</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateButtonText('quarterTermButton', 'Midterm')">Midterm</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateButtonText('quarterTermButton', 'Finals')">Finals</a></li>
            </ul>
        </div>

        <div class="dropdown">
            <button id="activityTypeButton" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Type of Activity
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" onclick="updateButtonText('activityTypeButton', 'All')">All</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateButtonText('activityTypeButton', 'Assignment')">Assignment</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateButtonText('activityTypeButton', 'Quiz')">Quiz</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateButtonText('activityTypeButton', 'Exam')">Exam</a></li>
            </ul>
        </div>

        <div class="grid-container">
            <div class="activity-text">ASSIGNMENT 1 - GAMEBOY</div>
            <div class="col">30</div>
        </div>
        <div class="grid-container">
            <div class="activity-text">QUIZ 1 - GAMEBOY</div>
            <div class="col">30</div>
        </div>
        <div class="grid-container">
            <div class="activity-text">EXAM 1 - GAMEBOY</div>
            <div class="col">30</div>
        </div>
    </div>
</div>

<script>
    function updateButtonText(buttonId, newText) {
        // Get the button by its ID
        const button = document.getElementById(buttonId);
        // Update the button's text
        button.textContent = newText;
    }
</script>

@endsection
