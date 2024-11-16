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
                <h1>GRADE SCHOOL</h1>
                <div class="user-info">
                    <img src="profile.png" alt="User profile" style="width:40px; height:40px; border-radius:50%;">
                    <span>Kuya Admin</span>
                </div>
            </div>


            <div class="grade-buttons">
                <a href="{{ route('grade1') }}" class="option">GRADE 1 <span>&#x2192;</span></a>
                <a href="{{ route('grade2') }}" class="option">GRADE 2 <span>&#x2192;</span></a>
                <a href="{{ route('grade3') }}" class="option">GRADE 3 <span>&#x2192;</span></a>
                <a href="{{ route('grade4') }}" class="option">GRADE 4 <span>&#x2192;</span></a>
                <a href="{{ route('grade5') }}" class="option">GRADE 5 <span>&#x2192;</span></a>
                <a href="{{ route('grade6') }}" class="option">GRADE 6 <span>&#x2192;</span></a>
            </div>            
        </div>
    </div>
</body>
</html>
