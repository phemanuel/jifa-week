<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
 

    <style>
        body {
            background: url('{{ asset("images/circuit-bg2.png") }}') center/cover no-repeat;
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Sidebar */
        .sidebar {
            background: rgba(0,0,0,0.85);
            min-height: 100vh;
            color: #0ff;
            box-shadow: 0 0 15px rgba(0,255,255,0.2);
            padding-top: 20px;
        }
        .sidebar a {
            color: #0ff;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            transition: 0.2s;
        }
        .sidebar a:hover, .sidebar a.active {
            background: rgba(0,255,255,0.1);
            color: #fff;
            border-left: 3px solid #0ff;
        }

        /* Top navbar */
        .topbar {
            background: rgba(0,0,0,0.8);
            color: #0ff;
            padding: 10px 20px;
            box-shadow: 0 0 10px rgba(0,255,255,0.2);
        }

        /* Card styling */
        .card {
            background: rgba(0,0,0,0.8);
            color: #fff;
            border: 1px solid #0ff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,255,255,0.2);
        }
        .card-header {
            background: rgba(0,0,0,0.9);
            border-bottom: 1px solid #0ff;
            color: #0ff;
            font-weight: bold;
        }

        /* Buttons */
        .btn-primary {
            background: #0ff;
            color: #000;
            border: none;
            font-weight: bold;
        }
        .btn-primary:hover {
            background: #00bcd4;
            color: #fff;
        }

        /* Table */
        .table th, .table td {
            border-top: 1px solid #0ff;
            vertical-align: middle;
            color: #fff;
        }
        .table thead th {
            border-bottom: 2px solid #0ff;
        }

        /* Alerts */
        .alert {
            background-color: rgba(39, 150, 85, 0.6);
            color: #fff;
            border: none;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 15px 0;
            color: #0ff;
        }
    </style>
</head>
<body>

<div class="d-flex">
    {{-- Sidebar --}}
    <div class="sidebar flex-shrink-0">
        <div class="text-center mb-4">
            <img src="{{ asset('images/jifa-logo.png') }}" alt="Logo" style="width:80px;">
            <h5 class="mt-2">Admin Panel</h5>
        </div>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}"><i class="bi bi-speedometer2"></i> Dashboard</a>
        <a href="{{ route('admin.designers') }}" class="{{ request()->is('admin/designers*') ? 'active' : '' }}"><i class="bi bi-person-badge"></i> Designers</a>
        <a href="{{ route('admin.childrens') }}" class="{{ request()->is('admin/childrens*') ? 'active' : '' }}"><i class="bi bi-people"></i> Children</a>
        <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.users') }}">
        <i class="bi bi-person-lines-fill me-2"></i>Users
    </a>
</li>
        <form action="{{ route('admin.logout') }}" method="POST" class="mt-3 px-3">
            @csrf
            <button class="btn btn-primary w-100"><i class="bi bi-box-arrow-right"></i> Logout</button>
        </form>
    </div>

    {{-- Main Content --}}
    <div class="flex-grow-1">
        {{-- Top Bar --}}
        <div class="topbar d-flex justify-content-between align-items-center">
            <h4 class="m-0">@yield('page-title', 'Dashboard')</h4>
            <div>Welcome, {{ auth()->user()->name }}</div>
        </div>

        {{-- Page Content --}}
        <div class="p-4">
            @yield('content')
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
>

@stack('scripts')
</body>
</html>