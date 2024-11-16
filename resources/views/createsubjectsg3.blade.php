<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/createsubject.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <div class="sidebar">
            <ul>
                <li><a href="#" class="active">CURRICULUM</a></li>
                <li><a href="#">PAYMENT</a></li>
                <li><a href="#">SCHEDULE</a></li>
                <li><a href="#">COURSE</a></li>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>CREATE SUBJECT</h1>
                <div class="user-info">
                    <img src="profile.png" alt="User profile">
                    <span>Kuya admin po</span>
                    <span class="role">Admin</span>
                </div>
            </div>
            
            <div class="content">
                <div class="section-header">
                    <h2>PLEASE FILL UP THE FORM</h2>
                    <div class="buttons">
                        <a href="#" class="option-button" onclick="document.getElementById('createSubjectForm').submit(); return false;">CREATE</a>
                    </div>
                </div>
                
                <div class="card">
                    <h3>Bachelor of Science in Information Technology</h3>
                    <p>Fill out the form below to add a new subject.</p>
                    
                    <!-- Subject Creation Form -->
                    <form id="createSubjectForm" action="{{ route('viewsubjectsg3') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="subjectName">Name of Subject:</label>
                            <input type="text" id="subjectName" name="subjectName" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>