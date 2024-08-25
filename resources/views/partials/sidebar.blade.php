<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcel Delivery - Dashboard</title>
    <!-- Bootstrap CSS -->
    
   
</head>
<body>    

<div class="sidebar bg-primary">
        <ul class="nav flex-column p-3">
            <!-- Dashboard Link -->
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('home')) active @endif" href="{{ route('home') }}">
                    <i class="bi bi-house-door"></i> Dashboard
                </a>
            </li>

            <!-- Conditional Links for Super Admin -->
            @if(Auth::user()->role === 'super_admin')
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('manage.branches')) active @endif" href="#">
                        <i class="bi bi-gear"></i> Manage Branches
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('manage.users')) active @endif" href="#">
                        <i class="bi bi-people"></i> Manage Users
                    </a>
                </li>
            @endif

            <!-- Conditional Links for Branch Admin -->
            @if(Auth::user()->role === 'branch_admin')
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('branch.staff.manage')) active @endif" href="#">
                        <i class="bi bi-person-badge"></i> Manage Staff
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('branch.delivery.report.daily')) active @endif" href="#">
                        <i class="bi bi-calendar-day"></i> Daily Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('branch.delivery.report.monthly')) active @endif" href="#">
                        <i class="bi bi-calendar-month"></i> Monthly Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('branch.delivery.report.yearly')) active @endif" href="#">
                        <i class="bi bi-calendar-year"></i> Yearly Reports
                    </a>
                </li>
            @endif

            <!-- Conditional Links for Staff -->
            @if(Auth::user()->role === 'staff')
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('parcel.create')) active @endif" href="{{ route('parcel.create') }}">
                        <i class="bi bi-box-seam"></i> Register Parcel
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('parcel.status')) active @endif" href="{{ route('parcel.status') }}">
                        <i class="bi bi-pencil-square"></i> Update Parcel Status
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('parcel.index')) active @endif" href="#">
                        <i class="bi bi-list-check"></i> View All Parcels
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
</body>
</html