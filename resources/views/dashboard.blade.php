<?php use Illuminate\Support\Facades\Auth;
      $userName = Auth::user()->name;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="google272fdb27c36562fb">
  <title>Freelancer Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
  <link rel="icon" href="https://camblish.co.za/wp-content/uploads/2023/02/1.-Camblish-Orginal-Logo-1418x1536.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
  <!-- Header -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <div class="text-center">
        <img src="https://camblish.co.za/wp-content/uploads/2023/02/1.-Camblish-Orginal-Logo-1418x1536.png" alt="Camblish Logo" width="30" height="30">
        Freelancer
      </div>
    </div>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" class="d-none" alt="Profile" class="square">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{$userName}}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile mt-5">
            <li class="dropdown-header">
              <span>Freelancer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>  
              <a class="dropdown-item d-flex align-items-center" href="users-profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <!-- Logout Form -->
            <li>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item d-flex align-items-center">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <!-- Features Ribbon -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
    <div class="container-fluid">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="index">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list">Lists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Tasklists">Tasklists</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('/myprojects') }}">My Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inbox">Inbox</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="Feedback">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="Free-Credit">Free-Credit</a>
        </li>
        <li>
          <a class="nav-link" href="Project-updates"> Project Updates</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <main id="main" class="main">
    <div class="container my-4">
      <h1>Welcome to the Freelancer Dashboard</h1>
      <p>Manage your freelancer resources, track performance, and more.</p>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
      <span class="text-muted">&copy; 2024 Freelancer Dashboard. All rights reserved.</span>
    </div>
  </footer>

  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
