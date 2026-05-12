@extends('layouts.main')

@section('title', 'Land Rover Rental - Home')

@section('content')
  <section class="hero-section py-5 d-flex align-items-center" style="background-image: url('{{ asset('assets/hero-section.jpg') }}'); background-size: cover; background-position: center; position: relative;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.6); z-index: 1;"></div>
    <div class="container position-relative" style="z-index: 2;">
      <div class="row">
        <div class="col-lg-8 text-white">
          <h1 class="display-4 fw-bold">Sewa Land Rover <br>Untuk Petualangan Anda</h1>
          <p class="lead">Nikmati pengalaman berkendara mewah dan tangguh dengan armada Land Rover pilihan. Tersedia Range Rover, Discovery, Sport, dan Defender dari tahun 2005-2007.</p>
          <div class="d-flex flex-wrap gap-3">
            <a href="{{ route('booking') }}" class="btn btn-primary btn-lg"><i class="bi bi-calendar-check"></i> Pesan Sekarang</a>
            <a href="{{ route('products') }}" class="btn btn-outline-light btn-lg"><i class="bi bi-car-front-fill"></i> Lihat Produk</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="product-section py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-5">Armada Kami <i class="bi bi-car-front-fill"></i></h2>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm" data-item-name="Range Rover 2005" data-stock="5">
            <img src="{{ asset('assets/disco3.png') }}" class="card-img-top" alt="Range Rover 2005">
            <div class="card-body">
              <h5 class="card-title">Range Rover 2005</h5>
              <p class="card-text">Kemewahan klasik dengan performa off-road mumpuni. Interior kulit, mesin V8.</p>
              <p class="mb-2 fw-semibold">Stok: <span class="stock-count">5</span> unit</p>
              <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                <span class="h5 text-primary mb-0">Rp 1.500.000/hari</span>
                <button class="btn btn-sm btn-warning btn-stock-action" type="button">Sewa</button>
                <button class="btn btn-sm btn-outline-primary btn-wishlist" type="button">Tambah ke Wishlist</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm" data-item-name="Range Rover 2007" data-stock="4">
            <img src="{{ asset('assets/discov3.png') }}" class="card-img-top" alt="Range Rover 2007">
            <div class="card-body">
              <h5 class="card-title">Range Rover 2007</h5>
              <p class="card-text">Model facelift dengan teknologi lebih modern, tetap elegan dan tangguh.</p>
              <p class="mb-2 fw-semibold">Stok: <span class="stock-count">4</span> unit</p>
              <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                <span class="h5 text-primary mb-0">Rp 1.700.000/hari</span>
                <button class="btn btn-sm btn-warning btn-stock-action" type="button">Sewa</button>
                <button class="btn btn-sm btn-outline-primary btn-wishlist" type="button">Tambah ke Wishlist</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm" data-item-name="Range Rover Sport 2005" data-stock="6">
            <img src="{{ asset('assets/disco333.png') }}" class="card-img-top" alt="Range Rover Sport 2005">
            <div class="card-body">
              <h5 class="card-title">Range Rover Sport 2005</h5>
              <p class="card-text">Dinamis dan sporty, cocok untuk perjalanan berkecepatan tinggi dengan gaya.</p>
              <p class="mb-2 fw-semibold">Stok: <span class="stock-count">6</span> unit</p>
              <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                <span class="h5 text-primary mb-0">Rp 1.600.000/hari</span>
                <button class="btn btn-sm btn-warning btn-stock-action" type="button">Sewa</button>
                <button class="btn btn-sm btn-outline-primary btn-wishlist" type="button">Tambah ke Wishlist</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm" data-item-name="Discovery 3" data-stock="3">
            <img src="{{ asset('assets/disco333333.png') }}" class="card-img-top" alt="Discovery 3">
            <div class="card-body">
              <h5 class="card-title">Discovery 3</h5>
              <p class="card-text">Ruang lega, mampu membawa keluarga besar dengan kenyamanan terbaik.</p>
              <p class="mb-2 fw-semibold">Stok: <span class="stock-count">3</span> unit</p>
              <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                <span class="h5 text-primary mb-0">Rp 1.400.000/hari</span>
                <button class="btn btn-sm btn-warning btn-stock-action" type="button">Sewa</button>
                <button class="btn btn-sm btn-outline-primary btn-wishlist" type="button">Tambah ke Wishlist</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm" data-item-name="Discovery 4" data-stock="4">
            <img src="{{ asset('assets/discovery33.png') }}" class="card-img-top" alt="Discovery 4">
            <div class="card-body">
              <h5 class="card-title">Discovery 4</h5>
              <p class="card-text">Perpaduan kemewahan dan teknologi canggih, siap menemani petualangan Anda.</p>
              <p class="mb-2 fw-semibold">Stok: <span class="stock-count">4</span> unit</p>
              <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                <span class="h5 text-primary mb-0">Rp 1.800.000/hari</span>
                <button class="btn btn-sm btn-warning btn-stock-action" type="button">Sewa</button>
                <button class="btn btn-sm btn-outline-primary btn-wishlist" type="button">Tambah ke Wishlist</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm" data-item-name="Land Rover Defender 2007" data-stock="2">
            <img src="{{ asset('assets/defender.png') }}" class="card-img-top" alt="Land Rover Defender 2007">
            <div class="card-body">
              <h5 class="card-title">Land Rover Defender 2007</h5>
              <p class="card-text">Ikon off-road sejati, kokoh dan tangguh di segala medan. Pilihan tepat untuk petualangan ekstrem.</p>
              <p class="mb-2 fw-semibold">Stok: <span class="stock-count">2</span> unit</p>
              <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                <span class="h5 text-primary mb-0">Rp 1.900.000/hari</span>
                <button class="btn btn-sm btn-warning btn-stock-action" type="button">Sewa</button>
                <button class="btn btn-sm btn-outline-primary btn-wishlist" type="button">Tambah ke Wishlist</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="wishlistModal" tabindex="-1" aria-labelledby="wishlistModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="wishlistModalLabel"><i class="bi bi-heart-fill text-danger"></i> Wishlist Anda</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p id="wishlistEmptyText" class="text-muted mb-0">Wishlist masih kosong.</p>
          <ul id="wishlistItems" class="list-group"></ul>
        </div>
      </div>
    </div>
  </div>
@endsection

