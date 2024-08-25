@extends('layout.main')
@section('content')
<div class="contain">
    <!-- Welcome Banner -->
    <div class="jumbotron bg-primary text-white p-5 rounded-lg mb-4">
        <h1 class="display-4">Welcome, {{ Auth::user()->name }}!</h1>
        <p class="lead">We're glad to have you back. Here's a quick overview of your activity.</p>
    </div>

    <!-- User Info and Stats Section -->
    <div class="row">
        <!-- Card 1: Profile Information -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Your Profile</h5>
                    <p class="card-text">Email: {{ Auth::user()->email }}</p>
                    <p class="card-text">Joined: {{ Auth::user()->created_at->format('M d, Y') }}</p>
                    <a href="#" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>

        <!-- Card 2: Recent Activity -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Recent Activity</h5>
                    <p class="card-text">You have 3 pending deliveries.</p>
                    <p class="card-text">Last login: {{ Auth::user()->last_login_at }}</p>
                    <a href="#" class="btn btn-primary">View Deliveries</a>
                </div>
            </div>
        </div>

        <!-- Card 3: Quick Links -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{route('parcel.create')}}" class="btn btn-link">Create a New Delivery</a></li>
                        <li><a href="#" class="btn btn-link">Account Settings</a></li>
                        <li><a href="#" class="btn btn-link">Contact Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Sections -->
    <div class="row">
        <!-- Optionally add more content here such as graphs, recent orders, notifications, etc. -->
        <div class="col-12 mt-4">
            <div class="alert alert-info">
                <p>Don't forget to check out our latest updates and features!</p>
            </div>
        </div>
    </div>
</div>
@endsection
