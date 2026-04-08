<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Land Rover Rental - Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/land-rover-logo-png_seeklogo-201638.png') }}" width="50" style="margin-right: 30px;"> Land Rover Rental</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ route('products') }}">Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('booking') }}">Booking</a></li>
          <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
            <span class="nav-link"><i class="bi bi-person-circle"></i> {{ session('username', 'Tamu') }}</span>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="py-5 text-white" style="background: linear-gradient(135deg, #101820 0%, #2f4f4f 100%);">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h1 class="display-5 fw-bold mb-3">Daftar Produk Land Rover</h1>
          <p class="lead mb-0">Semua produk di bawah ini ditampilkan langsung dari database beserta kategori, brand, harga, dan stok saat ini.</p>
        </div>
        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
          <a href="{{ route('booking') }}" class="btn btn-warning btn-lg">
            <i class="bi bi-calendar-check"></i> Booking Sekarang
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-light">
    <div class="container">
      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Produk Tersedia</h2>
        <div class="d-flex align-items-center gap-2">
          <a href="{{ route('products.create') }}" class="btn btn-dark">
            <i class="bi bi-plus-circle"></i> Tambah Produk
          </a>
          <span class="badge text-bg-dark fs-6">{{ $products->count() }} produk</span>
        </div>
      </div>

      <div class="row g-4">
        @forelse ($products as $product)
          <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0">
              <img src="{{ asset('assets/hero-section.jpg') }}" class="card-img-top" alt="{{ $product->product_name }}" style="height: 220px; object-fit: cover;">
              <div class="card-body d-flex flex-column">
                <div class="d-flex gap-2 flex-wrap mb-3">
                  <span class="badge text-bg-success">{{ $product->category->category_name ?? 'Tanpa Kategori' }}</span>
                  <span class="badge text-bg-secondary">{{ $product->brand->brand_name ?? 'Tanpa Brand' }}</span>
                </div>
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text text-muted mb-2">ID Produk: {{ $product->product_id }}</p>
                <p class="card-text mb-1">Harga: <strong>Rp {{ number_format($product->product_price, 0, ',', '.') }}</strong></p>
                <p class="card-text mb-4">Stok: <strong>{{ $product->product_stock }}</strong> unit</p>
                <div class="mt-auto d-grid">
                  <a href="{{ route('booking') }}" class="btn btn-outline-dark">
                    <i class="bi bi-bag-check"></i> Sewa Produk Ini
                  </a>
                </div>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12">
            <div class="alert alert-warning mb-0">
              Data produk belum tersedia di database.
            </div>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  <footer class="footer bg-dark text-white py-4">
    <div class="container text-center">
      <p class="mb-1">&copy; 2025 Land Rover Rental. All rights reserved.</p>
      <a href="{{ route('home') }}" class="text-white text-decoration-none">Kembali ke halaman utama</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
