<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Land Rover Rental - Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/land-rover-logo-png_seeklogo-201638.png') }}" width="50" style="margin-right: 30px;"> Land Rover Rental</a>
      <div class="ms-auto">
        <a href="{{ route('products') }}" class="btn btn-outline-light">
          <i class="bi bi-arrow-left"></i> Kembali ke Produk
        </a>
      </div>
    </div>
  </nav>

  <section class="py-5 bg-light min-vh-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card shadow-sm border-0">
            <div class="card-header bg-dark text-white py-3">
              <h1 class="h4 mb-0">Tambah Produk Baru</h1>
            </div>
            <div class="card-body p-4">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul class="mb-0 ps-3">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                  <label for="product_name" class="form-label">Nama Produk</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" value="{{ old('product_name') }}" required>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="category_id" class="form-label">Kategori</label>
                    <select class="form-select" id="category_id" name="category_id" required>
                      <option value="">Pilih kategori</option>
                      @foreach ($categories as $category)
                        <option value="{{ $category->category_id }}" @selected(old('category_id') == $category->category_id)>
                          {{ $category->category_name }}
                        </option>
                      @endforeach
                    </select>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="brand_id" class="form-label">Brand</label>
                    <select class="form-select" id="brand_id" name="brand_id" required>
                      <option value="">Pilih brand</option>
                      @foreach ($brands as $brand)
                        <option value="{{ $brand->brand_id }}" @selected(old('brand_id') == $brand->brand_id)>
                          {{ $brand->brand_name }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="product_price" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="product_price" name="product_price" value="{{ old('product_price') }}" min="0" required>
                  </div>

                  <div class="col-md-6 mb-4">
                    <label for="product_stock" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="product_stock" name="product_stock" value="{{ old('product_stock') }}" min="0" required>
                  </div>
                </div>

                <div class="d-flex gap-2">
                  <button type="submit" class="btn btn-dark">
                    <i class="bi bi-save"></i> Simpan Produk
                  </button>
                  <a href="{{ route('products') }}" class="btn btn-outline-secondary">Batal</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
