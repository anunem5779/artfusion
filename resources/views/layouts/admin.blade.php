<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - ArtFusion</title>

    <!-- Include your CSS here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="admin-dashboard-container">
        <!-- You can include an admin-specific navbar here if needed -->
        @yield('content')
    </div>
</body>
</html>
