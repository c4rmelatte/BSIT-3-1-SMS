<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>

    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        /* Main grid layout */
        .main-layout {
            display: grid;
            grid-template-areas: 
                "sidebar navbar"
                "sidebar content";
            grid-template-columns: 280px 1fr;
            grid-template-rows: auto 1fr;
            height: 100vh;
        }

        .sidebar {
            grid-area: sidebar;
        }

        .navbar {
            grid-area: navbar;
            width: 100%;
            z-index: 1000;
            background-color: #37584F;
        }

        .content {
            grid-area: content;
            padding: 20px;
            overflow-y: auto;
            background-color: #F3F6FA;
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>