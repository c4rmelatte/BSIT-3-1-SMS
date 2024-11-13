@extends('enrollment')

@section('content')
@include('layouts.adminnav')
<div class="container mt-4">
    <h2 class="text-center mb-4">View Students</h2>
    <div class="card">
        <div class="card-body">
            <!-- Filter Form -->
            <form id="filterForm">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="year" class="form-label">Year:</label>
                        <select class="form-select" id="year" name="year">
                            <option value="">Select Year</option>
                            <option value="1st">1st Year</option>
                            <option value="2nd">2nd Year</option>
                            <option value="3rd">3rd Year</option>
                            <option value="4th">4th Year</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="course" class="form-label">Course:</label>
                        <select class="form-select" id="course" name="course">
                            <option value="">Select Course</option>
                            <option value="BSCS">BS Computer Science</option>
                            <option value="BSIT">BS Information Technology</option>
                            <option value="BSSE">BS Software Engineering</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="section" class="form-label">Section/Block:</label>
                        <select class="form-select" id="section" name="section">
                            <option value="">Select Section/Block</option>
                            <option value="A">Block A</option>
                            <option value="B">Block B</option>
                            <option value="C">Block C</option>
                        </select>
                    </div>
                </div>
                <div class="text-center mb-3">
                    <button type="button" class="btn btn-primary" style="background-color: #E8CE83; color: #000;"  onclick="filterStudents()">View</button>
                </div>
            </form>

            <!-- Student List Table -->
            <div id="studentList" class="table-responsive" style="display: none;">
                <h4 class="text-center mb-3">Student List</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Year</th>
                            <th>Course</th>
                            <th>Section/Block</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Student Data -->
                        <tr>
                            <td>John Doe</td>
                            <td>1st Year</td>
                            <td>BS Computer Science</td>
                            <td>Block A</td>
                            <td>
                                <a href="#" style="background-color: #E8CE83; color: #000;" class="btn btn-warning btn-sm me-2">Edit</a>
                                <button type="button"  style="background-color: #E8CE83; color: #000;" class="btn btn-danger btn-sm" >Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>2nd Year</td>
                            <td>BS Information Technology</td>
                            <td>Block B</td>
                            <td>
                                <a href="#" style="background-color: #E8CE83; color: #000;" class="btn btn-warning btn-sm me-2">Edit</a>
                                <button type="button" style="background-color: #E8CE83; color: #000;" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Sam Brown</td>
                            <td>3rd Year</td>
                            <td>BS Software Engineering</td>
                            <td>Block C</td>
                            <td>
                                <a href="#" style="background-color: #E8CE83; color: #000;" class="btn btn-warning btn-sm me-2">Edit</a>
                                <button type="button"style="background-color: #E8CE83; color: #000;" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function filterStudents() {
        // Get selected values from the form
        var year = document.getElementById("year").value;
        var course = document.getElementById("course").value;
        var section = document.getElementById("section").value;

        // You can implement the logic to filter data based on these values
        // For now, we just display the student list
        if (year && course && section) {
            document.getElementById("studentList").style.display = "block";
        } else {
            alert("Please select all filter options.");
        }
    }
</script>
@endsection
