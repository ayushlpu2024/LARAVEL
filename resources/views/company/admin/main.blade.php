<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>@yield('title', 'Admin')</title>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        
        <a href="{{ route('dashboard') }}" class="logo">Hash Restaurant</a>
        <ul class="side-menu">
            <li class="{{ request()->routeIs(['dashboard', 'login']) ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}"><i class='bx bxs-dashboard'></i>Dashboard</a>
            </li>
            <li class="{{ request()->routeIs(['staff-account', 'staff-account-create', 'staff-account-edit', 'staff-account-show', 'staff-account-search-index', 'staff-account-search-create']) ? 'active' : '' }}">
                <a href="{{ route('staff-account') }}"><i class='bx bxs-user-rectangle'></i>Staff Accounts</a>
            </li>
            <li class="{{ request()->routeIs(['food-menu', 'food-menu-create', 'food-menu-edit', 'food-menu-show']) ? 'active' : '' }}">
                <a href="{{ route('food-menu') }}"><i class='bx bxs-food-menu'></i>Food Menus</a>
            </li>
            <li>
                <a href="#"><i class='bx bxs-store'></i>Restaurant</a>
            </li>
            <li class="{{ request()->routeIs(['partnership']) ? 'active' : '' }}">
                <a href="{{ route('partnership') }}"><i class='bx bxs-group'></i>Partnerships</a>
            </li>
            <li>
                <a href="#"><i class='bx bxs-gift'></i>Promotions & Discounts</a>
            </li>
            <li>
                <a href="#"><i class='bx bxs-truck' ></i>Delivery Management</a>
            </li>
            <li>
                <a href="#"><i class='bx bxs-receipt'></i>Billing & Invoices</a>
            </li>
            <li>
                <a href="#"><i class='bx bx-analyse'></i>Analytics</a>
            </li>
        </ul>

        <ul class="side-menu">
            <li>
                <a href="#"><i class='bx bx-shield-quarter'></i>Access Control</a>
            </li>
            <li>
                <a href="#"><i class='bx bx-cog'></i>Settings</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST" id="logout-form">

                    @csrf

                    <button type="button" id="logout-button">
                        <i class='bx bx-log-out-circle'></i>
                        Logout
                    </button>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                </form>
            </li>
        </ul>

    </div>
    <!-- End of Sidebar -->

    <div class="top-bar">
        <nav>
            <i class='bx bx-menu'></i>
            <div class="right-side">
                <input type="checkbox" id="theme-toggle" hidden><label for="theme-toggle" class="theme-toggle"></label>
                <a href="#" class="profile"><i class='bx bx-user-circle'></i></a>
            </div>
        </nav>
    </div>

    @yield('content')

    <script src="{{ asset('js/admin.js') }}"></script>

</body>

</html>
