<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mekar Sari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?= base_url(); ?>">MS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('about'); ?>">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('produk'); ?>">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('layanan'); ?>">Layanan</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('kontak'); ?>">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>
<div style="margin-top: 80px;">
</body>
</html>