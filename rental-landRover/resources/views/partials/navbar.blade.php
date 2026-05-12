<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ asset('assets/land-rover-logo-png_seeklogo-201638.png') }}" width="50" style="margin-right: 30px;">
      Land Rover Rental
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products') }}">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('booking') }}">Booking</a>
        </li>

        <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
          <button id="themeToggleBtn" class="btn btn-outline-light btn-sm" type="button">
            <i class="bi bi-moon-stars-fill"></i> Dark Mode
          </button>
        </li>

        @auth
          <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
            <span class="nav-link">
              <i class="bi bi-person-circle"></i>
              {{ Auth::user()->name }}
            </span>
          </li>

          <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-outline-light btn-sm">
                <i class="bi bi-box-arrow-right"></i> Logout
              </button>
            </form>
          </li>
        @else
          <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
            <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">
              <i class="bi bi-box-arrow-in-right"></i> Login
            </a>
          </li>
          <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
            <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm">
              <i class="bi bi-person-plus"></i> Register
            </a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

