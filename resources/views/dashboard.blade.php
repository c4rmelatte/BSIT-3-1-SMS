<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            background-color: #20342b;
            width: 220px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            color: white;
        }
        .sidebar img {
            width: 80px;
            margin: 0 auto;
            display: block;
            border-radius: 50%;
        }
        .sidebar ul {
            list-style: none;
            padding-left: 0;
            margin-top: 30px;
        }
        .sidebar ul li {
            padding: 10px 20px;
            margin-bottom: 10px;
            color: #9db3a4;
            display: flex;
            align-items: center;
        }
        .sidebar ul li:hover {
            background-color: #325b48;
            color: #fff;
            cursor: pointer;
        }
        .sidebar ul li.active {
            color: #fff;
            font-weight: bold;
        }
        .sidebar ul li i {
            margin-right: 10px;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .content .header {
            background-color: #f9fafb;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
        }

        .content .header h2 {
            margin: 0;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-info span {
            margin-right: 10px;
        }

        .user-info img {
            width: 40px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="https://via.placeholder.com/80" alt="Logo">
        <ul>
            <li class="active">Announcements</li>
            <li>Building</li>
            <li>Departments</li>
            <li>Courses</li>
            <li>Classroom</li>
            <li>Subject</li>
        </ul>
    </div>

    <div class="content">
        <div class="header">
            <h2>DASHBOARD</h2>
            <div class="user-info">
                <span>Amelia Martin</span>
                <img src="https://via.placeholder.com/40" alt="User Avatar">
            </div>
        </div>

        <div class="main-content">
            <!-- Add your main content here -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>