@extends('elements.layout')

@section('content')
@include('include.teachersidebar')

<style>

    .padding {
        padding-bottom: 20px;
        color: #37584F;
        font-weight: bold;
    }

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

    .rowc {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: #90BDB1;
        color: white;
        font-size: 24px;
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }

    .course-info {
        display: flex;
        flex-direction: column;
        align-items: flex-start; /* Align content to the left */
    }

    .course-title {
        font-weight: bold;
        font-size: 28px;
        color: white;
    }

    .course-section {
        font-size: 20px;
        color: #70897E;
        margin-top: 5px;
    }

    .btn {
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
    <div class="container text-center">
        <div class="rowc">
            <div class="course-info">
                <div class="course-title">ITPC13 - SYSTEM ANALYSIS AND DESIGN</div>
                <div class="course-section">BSIT 3-1</div>
            </div>
            <button type="button" class="btn">></button>
        </div>
        
        <div class="rowc">
            <div class="course-info">
                <div class="course-title">ITPE2 - IT PROFESSIONAL ELECTIVE 2</div>
                <div class="course-section">BSIT 3-1</div>
            </div>
            <button type="button" class="btn">></button>
        </div>
        
        <div class="rowc">
            <div class="course-info">
                <div class="course-title">ITPE1 - IT PROFESSIONAL ELECTIVE 1</div>
                <div class="course-section">BSIT 3-1</div>
            </div>
            <button type="button" class="btn">></button>
        </div>

        <div class="rowc">
            <div class="course-info">
                <div class="course-title">ITPE1 - IT PROFESSIONAL ELECTIVE 1</div>
                <div class="course-section">BSIT 3-1</div>
            </div>
            <button type="button" class="btn">></button>
        </div>

        <div class="rowc">
            <div class="course-info">
                <div class="course-title">ITPE1 - IT PROFESSIONAL ELECTIVE 1</div>
                <div class="course-section">BSIT 3-1</div>
            </div>
            <button type="button" class="btn">></button>
        </div>

        <div class="rowc">
            <div class="course-info">
                <div class="course-title">ITPE1 - IT PROFESSIONAL ELECTIVE 1</div>
                <div class="course-section">BSIT 3-1</div>
            </div>
            <button type="button" class="btn">></button>
        </div>
    </div>
</div>

@endsection
