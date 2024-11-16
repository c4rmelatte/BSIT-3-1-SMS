<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/gr1to10.css') }}">
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
                <h1>EDIT SUBJECT</h1>
                <div class="user-info">
                    <img src="profile.png" alt="User profile">
                    <span>Kuya Admin Po</span>
                </div>
            </div>
            
            <div class="content">
                <div class="section-header">
                    <h2>GRADE 12</h2>
                    <div class="buttons">
                            <a href="{{ route('editsubjectg12') }}" class="option">EDIT</a>
                    </div>
                </div>
                
                <div class="card">
                    <h3>Bachelor of Science in Information Technology</h3>
                    <p>deets</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
