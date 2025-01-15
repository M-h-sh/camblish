<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://camblish.co.za/wp-content/uploads/2023/02/1.-Camblish-Orginal-Logo-1418x1536.png">

    <title>Freelancer</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="https://camblish.co.za/wp-content/uploads/2023/02/1.-Camblish-Orginal-Logo-1418x1536.png" alt="Camblish Logo" width="30" height="30" class="d-inline-block align-text-top">
                    Freelancer
                </a>
                <!-- Hamburger Menu -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="myproject">Post a Project</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    
    <!-- Main Content -->
    <main class="container my-5">
        <div class="text-center">
            <h1>Welcome to Freelancer</h1>
            <p class="lead">The ultimate platform for hiring skilled professionals and showcasing your talents.</p>
            <a href="{{ url('/projects') }}" class="btn btn-primary">Explore Projects</a>
            <a href="{{ url('/register') }}" class="btn btn-dark">Join as a Freelancer</a>
        </div>

        <section class="mt-5">
            <div class="row">
                <div class="col-md-4 text-center">
                    <h3>Hire Experts</h3>
                    <p>Connect with skilled freelancers from various industries and get your tasks done efficiently.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h3>Showcase Your Skills</h3>
                    <p>Freelancers can create profiles, bid on projects, and grow their careers with ease.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h3>Safe Transactions</h3>
                    <p>Use secure payment options to ensure a reliable and trustworthy experience for everyone.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-light py-4 text-center">
        <div class="container">
            <p class="mb-0">&copy; 2024 Freelancer. All rights reserved.</p>
            <p>
                <a href="#" class="text-dark">Privacy Policy</a> | 
                <a href="#" class="text-dark">Terms of Service</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
