<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
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

        <div class="main-content">

            <div class="header">
                <h1>JUNIOR HIGH SCHOOL</h1>
                <div class="user-info">
                    <img src="profile.png" alt="User profile" style="width:40px; height:40px; border-radius:50%;">
                    <span>Kuya Admin</span>
                </div>
            </div>

            <div class="grade-buttons">
                <a href="{{ route('grade7') }}" class="option">GRADE 7 <span>&#x2192;</span></a>
                <a href="{{ route('grade8') }}" class="option">GRADE 8 <span>&#x2192;</span></a>
                <a href="{{ route('grade9') }}" class="option">GRADE 9 <span>&#x2192;</span></a>
                <a href="{{ route('grade10') }}" class="option">GRADE 10 <span>&#x2192;</span></a>
            </div>            
        </div>
    </div>
</body>
</html>
