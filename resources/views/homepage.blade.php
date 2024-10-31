<!-- login kuno parang simulation lang pag nakalogin na -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <title>Home</title>
    
</head>
<!-- nasa public/css/homepege yung css -->
<body>
<h1 class>payment homepage</h1>
    <div class="container">
        <div class="details">
        <a href="{{url ('/studentdashboard')}}" class="btn-custom ms-4 text-decoration-none">Student</a>
        <a href="{{url ('/admindashboard')}}" class="btn-custom ms-4 text-decoration-none">Admin</a>
        </div>
    
    </div>
</body>
</html>

