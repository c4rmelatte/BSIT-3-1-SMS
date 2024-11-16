<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/college.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <div class="sidebar">
            <ul>
                <li><a href="#" class="active">CURRICULUM</a></li>
                <li><a href="#">PAYMENT</a></li>
                <li><a href="#">SCHEDULE</a></li>
                <li><a href="#" onclick="showModal()">COURSE</a></li>
            </ul>
        </div>

        <div class="main-content">
            <div class="header">
                <h1>COLLEGE DEPARTMENT</h1>
                <div class="user-info">
                    <img src="profile.png" alt="User profile">
                    <span>Kuya Admin</span>
                </div>
            </div>

            <div class="card">
                <h3>COURSES FOR THE DEPARTMENT OF ENGINEERING AND...</h3>
            </div>

            <div class="card-secondary">
                <button onclick="showDepartmentSelection()" class="select-department-btn">Select Department</button>
            </div>
        </div>
    </div>

    <div class="overlay" id="departmentOverlay" style="display: none;">
        <div class="overlay-content">
            <button class="close-btn" onclick="closeOverlay()">×</button>
            <h2>Select Department:</h2>
            <select class="department-dropdown" id="departmentSelect">
                <option value="" disabled selected>Select department</option>
                <option value="Engineering">College of Engineering and Computer Technology</option>
                <option value="Nursing">College of Nursing</option>
                <option value="Medical Sciences">College of Allied Medical Sciences</option>
                <option value="Education">College of Education</option>
                <!-- Add more departments if needed -->
            </select>
            <button class="confirm-btn" onclick="confirmSelection()">CONFIRM</button>
        </div>
    </div>  

    <script>
        function showDepartmentSelection() {
    document.getElementById('departmentOverlay').style.display = 'flex';
}

function closeOverlay() {
    document.getElementById('departmentOverlay').style.display = 'none';
}

function confirmSelection() {
    const departmentSelect = document.getElementById('departmentSelect');
    const selectedDepartment = departmentSelect.value;
    if (selectedDepartment) {
        alert(`You selected: ${selectedDepartment}`);
        closeOverlay();
    } else {
        alert("Please select a department.");
    }
}
    </script>

</body>
</html>
