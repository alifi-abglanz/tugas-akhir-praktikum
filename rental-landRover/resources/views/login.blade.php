<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Land Rover Rental - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}"><i class="bi bi-truck"></i> Land Rover Rental</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('booking') }}">Booking</a></li>
          <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
            <button id="themeToggleBtn" class="btn btn-outline-light btn-sm" type="button">
              <i class="bi bi-moon-stars-fill"></i> Dark Mode
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="hero-booking py-4 bg-primary text-white">
    <div class="container text-center">
      <h1><i class="bi bi-box-arrow-in-right"></i> Login</h1>
      <p class="lead">Masuk untuk melanjutkan ke halaman utama.</p>
    </div>
  </section>

  <section class="form-section py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card shadow">
            <div class="card-body p-4">
              <h3 class="card-title mb-4"><i class="bi bi-person-lock"></i> Form Login</h3>

              @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                  {{ $errors->first() }}
                </div>
              @endif

              @if (session('error'))
                <div class="alert alert-danger" role="alert">
                  {{ session('error') }}
                </div>
              @endif

              <form method="post" action="{{ route('login.post') }}">
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-key"></i></span>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                </div>

                <div class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" id="remember_me" name="remember_me">
                  <label class="form-check-label" for="remember_me">Remember me</label>
                </div>

                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary btn-lg"><i class="bi bi-check-circle"></i> Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer bg-dark text-white py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5><i class="bi bi-truck"></i> Land Rover Rental</h5>
          <p>Rental mobil khusus Land Rover terpercaya sejak 2005. Melayani petualangan dan bisnis Anda.</p>
        </div>
        <div class="col-md-3">
          <h5>Menu</h5>
          <ul class="list-unstyled">
            <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></li>
            <li><a href="{{ route('booking') }}" class="text-white text-decoration-none">Booking</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Ikuti Kami</h5>
          <a href="#" class="text-white me-2"><i class="bi bi-facebook fs-4"></i></a>
          <a href="#" class="text-white me-2"><i class="bi bi-instagram fs-4"></i></a>
          <a href="#" class="text-white me-2"><i class="bi bi-twitter fs-4"></i></a>
        </div>
      </div>
      <hr class="bg-light">
      <p class="text-center mb-0">&copy; 2025 Land Rover Rental. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
