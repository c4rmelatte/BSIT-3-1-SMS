<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .sidebar {
        width: 280px;
        background-color: #37584F;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        padding: 20px;
        display: flex;
        flex-direction: column;
    }

    .sidebar a {
        color: white;
        text-decoration: none;
        margin-bottom: 10px;
        font-size: 18px;
    }

    .sidebar hr {
        border: none;
        height: 2px;
        background-color: #ffffff;
        margin: 20px 0;
        opacity: 0.5;
        width: 100%;
    }

    .sidebar a:not(.logo-link):hover {
        background-color: #273f39;
        padding-left: 10px;
        border-radius: 5px;
        transition: all 0.3s ease;
        color: white;
    }

    .dashboard {
        padding: 40px;
    }

    .logo-link {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    /* New styles for the logo */
    .sidebar .logo {
        width: 200px; 
        height: auto;
        margin-bottom: 20px;
    }

    .navbar {
    width: calc(100% - 280px);
    position: fixed;
    left: 280px;
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
</style>

</head>
<body>

<div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="dashboard navbar-brand fs-2 fw-bold">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Profile Dropdown -->
                    <div class="dropdown ms-auto">
                        <a class="nav-link dropdown-toggle d-flex align-items-center profile-link shadow-lg" href="#" role="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="css/images/profile.png" alt="Profile" class="rounded-circle me-2">
                            <div>
                                <p class="text-black mb-0">John Doe</p>
                                <p class="text-black mb-0" style="font-size: 0.9rem;">Admin</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="#">Info</a></li>
                            <li><a class="dropdown-item" href="{{url('/')}}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
     <!-- Sidebar -->
     <div class="sidebar">
        <a href="/" class="logo-link">
            <img src="css/images/logo.png" alt="Logo" class="logo">
        </a>
        <hr>
        <a href="#" class="nav-link">ANNOUNCEMENT</a>

        <!-- Dropdown for LEARN -->
        <div class="nav-item">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#learnDropdown" aria-expanded="false">
                DEPARTMENT
            </a>
            <div class="collapse" id="learnDropdown">
                <a href="#" class="nav-link ps-4">HIGH SCHOOL</a>
                <a href="#" class="nav-link ps-4">COLLEGE</a>
               
            </div>
        </div>

        <!-- Dropdown for ABOUT -->
        <div class="nav-item">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#aboutDropdown" aria-expanded="false">
                COURSES
            </a>
            <div class="collapse" id="aboutDropdown">
                <a href="#" class="nav-link ps-4">History</a>
                <a href="#" class="nav-link ps-4">Team</a>
                <a href="#" class="nav-link ps-4">Mission</a>
            </div>
        </div>

        <div class="nav-item">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#aboutDropdown" aria-expanded="false">
               SUBJECTS
            </a>
            <div class="collapse" id="aboutDropdown">
                <a href="#" class="nav-link ps-4">History</a>
                <a href="#" class="nav-link ps-4">Team</a>
                <a href="#" class="nav-link ps-4">Mission</a>
            </div>
        </div>

        <div class="nav-item">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#aboutDropdown" aria-expanded="false">
                CURRICULUM
            </a>
            <div class="collapse" id="aboutDropdown">
                <a href="#" class="nav-link ps-4">History</a>
                <a href="#" class="nav-link ps-4">Team</a>
                <a href="#" class="nav-link ps-4">Mission</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>