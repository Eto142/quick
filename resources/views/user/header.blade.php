<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard| Quicknest</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>
<body>
   @include('user.navbar')

        <!-- Overlay for mobile -->
        <div class="overlay" id="overlay"></div>

        <!-- Main Content -->
        <main class="main-content">
            <header class="header">
                <div class="header-left">
                    <button class="menu-toggle" id="menuToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="header-title-section">
                        <h1 class="page-title">User Dashboard</h1>
                        <div class="breadcrumb">
                            <a href="#">Home</a> / <span>Loan Dashboard</span>
                        </div>
                    </div>
                </div>
                
<div class="header-actions">
    <button class="header-btn">
        <i class="fas fa-bell"></i>
        <span class="notification-badge">1</span>
    </button>

    <!-- Profile Picture with Dropdown -->
    <div class="dropdown">
        <button class="header-btn dropdown-toggle">
            <img src="path-to-profile.jpg" alt="Profile" class="profile-pic">
        </button>
        <div class="dropdown-menu">
            <a href="/profile">Profile</a>
            <form method="POST" action="/logout">
                <!-- Include CSRF token if using Laravel or similar -->
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
</div>

            </header>

            <script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        const dropdown = document.querySelector('.dropdown');

        dropdownToggle.addEventListener('click', function (e) {
            e.stopPropagation();
            dropdown.classList.toggle('open');
        });

        document.addEventListener('click', function () {
            dropdown.classList.remove('open');
        });
    });
</script>

