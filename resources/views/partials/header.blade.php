<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Parcel Delivery</title>
    <!-- Add your CSS here -->
    <link href="{{url('assets/css/app.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    @auth
    <a class="navbar-brand p-2" href="#">BrandName</a>
    @else
        <a class="navbar-brand p-2" href="#">BrandName</a>
        <div class="ms-auto p-2">            
            <a href="{{ route('register')}}" class="btn btn-primary">Register</a>
        </div>
    @endauth
    </nav>
    <script src="assets/css/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/css/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>
