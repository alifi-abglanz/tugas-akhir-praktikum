@extends('layouts.main')

@section('title', 'Land Rover Rental - Produk')

@section('content')
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
@endsection

