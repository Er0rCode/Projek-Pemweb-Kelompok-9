<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mekar Sari</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
    }
    .hero {
      background: linear-gradient(to right,rgb(144, 159, 151),rgb(211, 232, 221));
      color: black;
      padding: 100px 0;
      position: relative;
      z-index: 1;
    }
    .btn-outline-light {
      border-width: 2px;
    }
    .navbar-nav .nav-link {
      color: white;
      margin-right: 15px;
    }
    .navbar-nav .nav-link:hover {
      text-decoration: underline;
    }
    .navbar .btn {
      font-weight: 500;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">MS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Layanan</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <div class="row align-items-center">
      <!-- Kiri: Teks -->
      <div class="col-md-6 pt-0" style="padding-top: 200px;">
        <h1 class="display-5 fw-bold">MEKAR SARI</h1>
        <p class="mt-3">
          <strong>Mekar Sari</strong> hadir untuk memudahkan pencarian alat & bahan bangunan dengan kualitas terbaik, harga terjangkau
          dan memberikan pelayanan yang terbaik 
        </p>
      </div>
      <!-- Kanan: Gambar -->
      <div class="col-md-6 text-center">
        <img src="image/foto2.jpeg" class="img-fluid rounded" alt="Rumah Impian">
      </div>
    </div>
  </div>
</section>


<!-- Section Tentang Kami -->
<section id="tentang" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <!-- Gambar -->
      <div class="col-md-6 mb-4 mb-md-0 text-center">
        <img src="image/foto1.jpeg" class="img-fluid rounded shadow" alt="Tentang Kami" style="max-width: 400px;">
      </div>

      <!-- Teks -->
      <div class="col-md-6">
        <h2 class="fw-bold mb-3">About US</h2>
        <p>
          <strong>Mekar Sari Store</strong> merupakan toko bangunan terpercaya yang telah berdiri sejak tahun 1997.
          Kami menyediakan berbagai macam kebutuhan material bangunan seperti semen, cat, pipa, kayu, dan perlengkapan renovasi rumah lainnya.
        </p>
        <p>
          Dengan mengutamakan pelayanan, harga terjangkau, dan kualitas produk, kami berkomitmen membantu setiap pelanggan membangun rumah impian mereka.
        </p>
      </div>
    </div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>