<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <style>
        /* Include basic CSS for the dashboard layout */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #2c3e50;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 15px 20px;
        }

        .sidebar ul li:hover {
            background-color: #34495e;
            cursor: pointer;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .navbar {
            background-color: #ecf0f1;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .user-profile {
            display: flex;
            align-items: center;
        }

        .navbar .user-profile img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="#">Announcement</a></li>
            <li><a href="#">Building</a></li>
            <li><a href="#">Departments</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Curriculum</a></li>
            <li><a href="#">Subject</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="navbar">
            <h1>Dashboard</h1>
            <div class="user-profile">
                <img src="{{ asset('images/profile-placeholder.png') }}" alt="User">
                <span>Archie Dela Cruz</span>
            </div>
        </div>

        <!-- Content will go here -->
    </div>
</body>
</html>
