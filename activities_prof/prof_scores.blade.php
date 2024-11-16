@extends('elements.layout')

@section('content')
@include('include.teachersidebar')

<style>
    body {
        height: 100%;
        overflow-y: auto;
    }

    .containerr {
        width: 70%;
        position: relative;
        z-index: 1000;
        top: 100px;
        margin-left: 18%;
    }

    .padding {
        padding-bottom: 20px;
        color: #37584F;
        font-weight: bold;
    }

    .course-info {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding-left: 20px;
    }

    .course-details {
        flex-grow: 1;
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

    .button-container {
        display: flex;
        gap: 10px;
    }

    .create-button, .delete-button {
    color: white;
    font-size: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    padding: 10px 20px;
    border: none; /* Remove borders */
}

.create-button {
    background-color: green;
}

.delete-button {
    background-color: red;
}


    .table-container {
        margin-top: 30px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 15px;
        text-align: left;
        font-size: 24px;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #90BDB1;
        color: white;
    }

    .activity-title {
        font-size: 26px;
        font-weight: bold;
        color: #37584F;
        text-align: center;
    }

    .student-name span {
        display: inline-block;
        margin-right: 5px;
    }

    .scoree {
        text-align: center;
        font-weight: bold;
    }

    .score input {
        width: 50px;
        font-size: 24px;
        text-align: center;
    }

</style>


<div class="containerr">
    <h1 class="padding">View Activities</h1>
    <div class="course-info">
        <div class="course-details">
            <div class="course-title">ITPC13 - SYSTEM ANALYSIS AND DESIGN</div>
            <div class="course-section">BSIT 3-1</div>
        </div>
        <div class="button-container">
            <button type="button" class="create-button" onclick="toggleEdit()">Edit</button>
            <button type="button" class="delete-button" >Delete</button>
        </div>
    </div>
    
    <div class="table-container">
        <table id="activityTable">
            <thead>
                <!-- Activity Title Row -->
                <tr>
                    <th colspan="2" class="activity-title">Assignment 1 - Gameboy</th>
                </tr>
                <!-- Header Row for Student Name and Score -->
                <tr>
                    <th>Student Name</th>
                    <th class="scoree">Score</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="student-name">
                        <span>John</span>
                        <span>A.</span>
                        <span>Doe</span>
                    </td>
                    <td class="scoree score" data-editable="false">85</td>
                </tr>
                <tr>
                    <td class="student-name">
                        <span>Jane</span>
                        <span>B.</span>
                        <span>Smith</span>
                    </td>
                    <td class="scoree score" data-editable="false">90</td>
                </tr>
                <tr>
                    <td class="student-name">
                        <span>Sam</span>
                        <span>C.</span>
                        <span>Williams</span>
                    </td>
                    <td class="scoree score" data-editable="false">75</td>
                </tr>
                <tr>
                    <td class="student-name">
                        <span>Chris</span>
                        <span>D.</span>
                        <span>Brown</span>
                    </td>
                    <td class="scoree score" data-editable="false">88</td>
                </tr>
                <tr>
                    <td class="student-name">
                        <span>Chris</span>
                        <span>D.</span>
                        <span>Brown</span>
                    </td>
                    <td class="scoree score" data-editable="false">88</td>
                </tr>
                <tr>
                    <td class="student-name">
                        <span>Chris</span>
                        <span>D.</span>
                        <span>Brown</span>
                    </td>
                    <td class="scoree score" data-editable="false">88</td>
                </tr>
                <tr>
                    <td class="student-name">
                        <span>Chris</span>
                        <span>D.</span>
                        <span>Brown</span>
                    </td>
                    <td class="scoree score" data-editable="false">88</td>
                </tr>
                <tr>
                    <td class="student-name">
                        <span>Chris</span>
                        <span>D.</span>
                        <span>Brown</span>
                    </td>
                    <td class="scoree score" data-editable="false">88</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    let isEditing = false;

    function toggleEdit() {
        const scores = document.querySelectorAll('.score');
        
        scores.forEach(cell => {
            if (isEditing) {
                // Save input value and replace input with text content
                const input = cell.querySelector('input');
                if (input) {
                    cell.textContent = input.value;
                }
                cell.setAttribute('data-editable', 'false');
            } else {
                // Create an input field with the current score as its value
                const currentScore = cell.textContent;
                cell.innerHTML = `<input type="text" value="${currentScore}" />`;
                cell.setAttribute('data-editable', 'true');
            }
        });
        
        // Toggle editing state
        isEditing = !isEditing;
        document.querySelector('.create-button').textContent = isEditing ? 'Save' : 'Edit';
    }


</script>

@endsection
