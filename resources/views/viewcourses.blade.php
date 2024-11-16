<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Courses</title>
    <link rel="stylesheet" href="{{ asset('css/viewcourses.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <div class="sidebar">
            <ul>
                <li><a href="#">CURRICULUM</a></li>
                <li><a href="#">PAYMENT</a></li>
                <li><a href="#">SCHEDULE</a></li>
                <li><a href="{{ route('view-courses') }}" class="active">COURSE</a></li>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>VIEW COURSES</h1>
                <div class="user-info">
                    <img src="profile.png" alt="User profile">
                    <span>Kuya Admin Po</span>
                </div>
            </div>
            
            <div class="content">
                <div class="section-header">
                    <h2>COLLEGE OF ENGINEERING AND COMPUTER TECHNOLOGY</h2>
                    <div class="buttons">
                            <a href="{{ route('createsubjects') }}" class="option"> + CREATE</a>
                    </div>
                </div>
                
                    <div class="course-buttons">
                        <a href="{{ route('bsit') }}" class="option-course">Bachelor of Science in Information Technology <span>&#x2192;</span></a>
                        <a href="{{ route('computerengineering') }}" class="option-course">Bachelor of Science in Computer Engineering <span>&#x2192;</span></a>
                    </div>                    
            </div>
        </div>
    </div>
</body>
</html>
