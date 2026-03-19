<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Land Rover Rental - Booking</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- External CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <!-- Navbar (sama seperti index) -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}"><i class="bi bi-truck"></i> Land Rover Rental</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ route('booking') }}">Booking</a></li>
          <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
            <button id="themeToggleBtn" class="btn btn-outline-light btn-sm" type="button">
              <i class="bi bi-moon-stars-fill"></i> Dark Mode
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section sederhana untuk halaman booking -->
  <section class="hero-booking py-4 bg-primary text-white">
    <div class="container text-center">
      <h1><i class="bi bi-calendar2-check"></i> Form Pemesanan</h1>
      <p class="lead">Isi data berikut untuk menyewa Land Rover impian Anda.</p>
    </div>
  </section>

  <!-- Form Section -->
  <section class="form-section py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card shadow">
            <div class="card-body p-4">
              <h3 class="card-title mb-4"><i class="bi bi-pencil-square"></i> Data Penyewa</h3>
              <!-- Form dengan validasi sederhana (required) -->
              <form id="bookingForm" action="{{ route('booking.store') }}" method="POST">
                @csrf
                <!-- Field 1: Nama Lengkap -->
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                  </div>
                  <div class="invalid-feedback">Nama harus diisi.</div>
                </div>
                <!-- Field 2: Pilih Mobil -->
                <div class="mb-3">
                  <label for="mobil" class="form-label">Pilih Mobil <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-car-front"></i></span>
                    <select class="form-select" id="mobil" name="mobil" required>
                      <option value="" disabled selected>-- Pilih Mobil --</option>
                      <option value="Range Rover 2005">Range Rover 2005</option>
                      <option value="Range Rover 2007">Range Rover 2007</option>
                      <option value="Range Rover Sport 2005">Range Rover Sport 2005</option>
                      <option value="Discovery 3">Discovery 3</option>
                      <option value="Discovery 4">Discovery 4</option>
                    </select>
                  </div>
                </div>
                <!-- Field 3: Tanggal Sewa -->
                <div class="mb-3">
                  <label for="tanggal" class="form-label">Tanggal Sewa <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                  </div>
                </div>
                <!-- Field 4: Lama Sewa (hari) -->
                <div class="mb-3">
                  <label for="lama" class="form-label">Lama Sewa (hari) <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-clock"></i></span>
                    <input type="number" class="form-control" id="lama" name="lama" placeholder="Misal: 3" min="1" required>
                  </div>
                  <div class="form-text">Minimal 1 hari.</div>
                </div>
                <!-- Tombol submit -->
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary btn-lg"><i class="bi bi-check-circle"></i> Pesan Sekarang</button>
                  <button type="reset" class="btn btn-outline-secondary"><i class="bi bi-arrow-counterclockwise"></i> Reset</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer (sama) -->
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <!-- Simple custom validation -->
  <script>
    document.getElementById('bookingForm').addEventListener('submit', function(e) {
      const lama = document.getElementById('lama');
      
      if (lama.value < 1) {
        e.preventDefault();
        alert('Lama sewa minimal 1 hari.');
        return false;
      }
    });
  </script>
</body>
</html>
