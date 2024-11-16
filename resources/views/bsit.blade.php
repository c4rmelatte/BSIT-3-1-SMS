<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/course.css') }}">
</head>
<body>
    <div class="dashboard-container">

        <div class="sidebar">
            <ul>
                <li><a href="#">CURRICULUM</a></li>
                <li><a href="#">PAYMENT</a></li>
                <li><a href="#">SCHEDULE</a></li>
                <li><a href="#" class="active">COURSE</a></li>
            </ul>
        </div>

        <div class="main-content">

            <div class="header">
                <h1>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</h1>
                <div class="user-info">
                    <img src="profile.png" alt="User profile" style="width:40px; height:40px; border-radius:50%;">
                    <span>Kuya Admin</span>
                </div>
            </div>

            <div class="select-year">
                <h2>SELECT YEAR</h2>
            </div>

            <div class="grade-buttons">
                <a href="{{ route('first_year') }}" class="option-course">1st Year <span>&#x2192;</span></a>
                <a href="{{ route('second_year') }}" class="option-course">2nd Year <span>&#x2192;</span></a>
                <a href="{{ route('third_year') }}" class="option-course">3rd Year <span>&#x2192;</span></a>
                <a href="{{ route('fourth_year') }}" class="option-course">4th Year <span>&#x2192;</span></a>
            </div>
                        
        </div>
    </div>
</body>
</html>
