<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home - Parcel Delivery</title>
    <!-- Add your CSS here -->
    <link href="{{url('assets/css/app.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    @include('partials.header')

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar bg-primary">
            @include('partials.sidebar')
        </div>

        <!-- Main Content -->
        <div class="content-container flex-grow-1">
            <div class="container mt-1">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
