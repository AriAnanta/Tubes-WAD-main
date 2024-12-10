<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GreenLedger')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="d-flex flex-column flex-lg-row vh-100">
        <!-- Sidebar -->
        <div class="d-none d-lg-block">
            @include('layouts.sidebar')
        </div>
        <!-- Navbar for smaller screens -->
        <div class="d-lg-none">
            @include('layouts.navbar')
        </div>
        <!-- Content Area -->
        <div class="flex-grow-1 overflow-auto">
            @include('layouts.navbar') <!-- Navbar for large screens -->
            <main class="container-fluid mt-4">
                @yield('content') <!-- Konten halaman -->
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
