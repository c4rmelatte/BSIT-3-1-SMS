<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

    main {
            margin-left: 250px; /* Adjust this based on sidebar width */
            padding: 20px;
        }
</style>


<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <div class="sidebar-header p-3 text-center">
                        <img src="{{ asset('images/logo.png') }}" alt="LOGOCAKES" style="width: 150px; height: auto;">
                    </div>
                    <ul class="nav flex-column">
                        <!-- Enrollment Dropdown -->
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#enrollmentDropdown" role="button" aria-expanded="false" aria-controls="enrollmentDropdown">
                                Student Enrollment
                            </a>
                            <div class="collapse" id="enrollmentDropdown">
                                <ul class="nav flex-column ms-3">
                                    <li><a class="nav-link" href="{{ route('enrollment.elementary') }}">Elementary</a></li>
                                    <li><a class="nav-link" href="{{ route('enrollment.highschool') }}">Highschool</a></li>
                                    <li><a class="nav-link" href="{{ route('enrollment.senior_high') }}">Senior High School</a></li>
                                    <li><a class="nav-link" href="{{ route('enrollment.college') }}">College</a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <!-- View Students - No dropdown, just links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('view_students') }}">View Students</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="py-4">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

  



</body>
</html>