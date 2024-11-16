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
                <li><a href="{{ route('view-courses') }}">COURSE</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="header">
                <h1>CURRICULUM</h1>
                <div class="user-info">
                    <img src="profile.png" alt="User profile">
                    <span>Kuya Admin Po</span>
                </div>
            </div>
            <div class="curriculum-options">
                <a href="{{ route('gradeschool') }}" class="option">Grade School <span>&#x2192;</span></a>
                <a href="{{ route('juniorhigh') }}" class="option">Junior High School <span>&#x2192;</span></a>
                <a href="{{ route('seniorhigh') }}" class="option">Senior High School <span>&#x2192;</span></a>
                <a href="{{ route('college') }}" class="option">College <span>&#x2192;</span></a>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
