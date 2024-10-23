<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Add your CSS links here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar bg-dark text-light p-3" style="width: 250px; height: 100vh;">
            <div class="sidebar-header">
                <img src="{{ asset('path-to-logo') }}" alt="Logo" class="img-fluid mb-4" style="max-width: 100px;">
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('announcement') }}">Announcement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('building') }}">Building</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('departments') }}">Departments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('courses') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('curriculum') }}">Curriculum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('subject') }}">Subject</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="content p-4" style="flex-grow: 1;">
            <!-- Navbar -->
            <div class="d-flex justify-content-end mb-4">
                <div class="user-profile d-flex align-items-center">
                    <img src="{{ asset('path-to-user-image') }}" alt="User" class="rounded-circle me-2" style="width: 40px;">
                    <span>{{ Auth::user()->name }}</span>
                </div>
            </div>

            <!-- Dynamic Content -->
            @yield('content')
        </div>
    </div>

    <!-- Add your JS scripts here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
