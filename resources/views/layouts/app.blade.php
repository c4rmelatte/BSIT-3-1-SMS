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
            background-color: #325C58;
            width: 220px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            color: white;
            transition: transform 0.3s ease;
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
            background-color: #2B5C58;
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
            transition: margin-left 0.3s ease;
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

        .navbar {
            width: calc(100% - 220px);
            position: fixed;
            left: 220px;
            z-index: 1000;
            top: 0;
        }

        .profile-link {
            background-color: white;
            border: 1px solid rgb(159, 159, 159);
            border-radius: 0.8rem;
            transition: background-color 1s ease;
            padding: 10px 30px;
            display: flex;
            width: 320px;
            align-items: center;
        }

        .profile-link img {
            height: 60px;
            width: 60px;
        }

        .profile-link div {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .profile-link p {
            margin: 0;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .sidebar {
                width: 220px;
                transform: translateX(-220px); /* Hide sidebar */
            }
            .content {
                margin-left: 0;
            }
            .navbar {
                width: 100%;
                left: 0;
            }
            .sidebar.show {
                transform: translateX(0); /* Show sidebar when toggled */
            }
        }
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <img src="https://pbs.twimg.com/profile_images/1394838411203158020/hUJh2MDa_400x400.png" alt="Logo">
        <ul>
            <li class="active">Announcements</li>
            <li>Departments</li>
            <li>Courses</li>
            <li>Classroom</li>
            <li>Subject</li>
        </ul>
    </div>

    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="btn btn-outline-secondary d-lg-none me-2" onclick="toggleSidebar()">☰</button>
                <a class="navbar-brand fs-2 fw-bold">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Profile Dropdown -->
                    <div class="dropdown ms-auto">
                        <a class="nav-link dropdown-toggle d-flex align-items-center profile-link shadow-lg" href="#" role="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://static-00.iconduck.com/assets.00/user-icon-1024x1024-dtzturco.png" alt="Profile" class="rounded-circle me-2">
                            <div>
                                <p class="text-black mb-0">John Doe</p>
                                <p class="text-black mb-0" style="font-size: 0.9rem;">Admin</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="#">Info</a></li>
                            <li><a class="dropdown-item" href="{{ url('/') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Content Area -->
        <div class="content">
            <h2>Welcome to the Dashboard</h2>
            <p>Dashboard content goes here...</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("show");
        }
    </script>
</body>
</html>
