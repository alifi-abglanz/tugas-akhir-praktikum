<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Land Rover Rental')</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  @include('partials.navbar')

  @if (session('success'))
    <div class="container mt-3">
      <div class="alert alert-success mb-0">{{ session('success') }}</div>
    </div>
  @endif
  @if (session('error'))
    <div class="container mt-3">
      <div class="alert alert-danger mb-0">{{ session('error') }}</div>
    </div>
  @endif

  <main>
    @yield('content')
  </main>

  <footer class="footer bg-dark text-white py-4">
    <div class="container text-center">
      <p class="mb-1">&copy; 2025 Land Rover Rental. All rights reserved.</p>
      <a href="{{ route('home') }}" class="text-white text-decoration-none">Kembali ke halaman utama</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

