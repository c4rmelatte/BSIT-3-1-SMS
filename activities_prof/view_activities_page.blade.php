@extends('elements.layout')


@section('content')
@include('include.teachersidebar')

<style>
body {
        height: 100%; /* Ensures the body fills the viewport height */
        overflow-y: auto; /* Adds scrollbar to the body when content overflows */
    }

    .containerr {
        width: 70%;
        /* Changed position to relative to allow scrolling */
        position: relative; 
        z-index: 1000;
        top: 100px; /* Adjusted to fit the layout */
        margin-left: 18%; /* Added left margin to prevent overlap with the sidebar */
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

    .course-info {
        display: flex;
        flex-direction: column;
        align-items: flex-start; 
        padding-left: 20px;
    }

    .course-title {
        font-weight: bold;
        font-size: 30px;
        color: #70897E;
    }

    .course-section {
        font-size: 27px;
        color: #70897E; 
        margin-top: 5px;
        font-weight: bold;
    }

    .create-button {
        margin-left: auto; 
        margin-right: 10px;
        background-color: green; 
        color: white; 
        font-size: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3); 
    }

    .btnn {
        background-color: #37584F;
        color: white;
        font-size: 24px;
        border: none;
        cursor: pointer;
        height: 50px;
        width: 50px;
        border-radius: 50%;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }

</style>


<div class="containerr">
    <h1 class="padding">View Activities</h1>
    <div class="course-info">
        <div>
            <div class="course-title">ITPC13 - SYSTEM ANALYSIS AND DESIGN</div>
            <div class="course-section">BSIT 3-1</div>
        </div>
        <button type="button" class="btn create-button">+ Create</button> <!-- Apply the new class here -->
    </div>
    
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
            <button type="button" class="btnn col">></button>
        </div>
        <div class="grid-container">
            <div class="activity-text">QUIZ 1 - GAMEBOY</div>
            <button type="button" class="btnn col">></button>
        </div>
        <div class="grid-container">
            <div class="activity-text">EXAM 1 - GAMEBOY</div>
            <button type="button" class="btnn col">></button>
        </div>
        <div class="grid-container">
            <div class="activity-text">EXAM 2 - GAMEBOY</div>
            <button type="button" class="btnn col">></button>
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
