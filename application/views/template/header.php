<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mekar Sari</title>
  
  <link rel="stylesheet" href="<?= base_url('assets/header.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/footer.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/home.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/about.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/layanan.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/produk.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/kontak.css'); ?>">
</head>

<body>
<nav>
  <div class="logo">
    <img src="assets/images/logo3.png" alt="Logo">
  </div>
  <ul>
  <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">Beranda</a></li>
  <li class="nav-item"><a class="nav-link" href="<?= base_url('about'); ?>">Tentang</a></li>
  <li class="nav-item"><a class="nav-link" href="<?= base_url('layanan'); ?>">Layanan</a></li>
  <li class="nav-item"><a class="nav-link" href="<?= base_url('produk'); ?>">Produk</a></li>
  <li class="nav-item"><a class="nav-link" href="<?= base_url('kontak'); ?>">Kontak</a></li>

  </ul>
</nav>


<script src="<?= base_url('assets/js/home.js'); ?>"></script>


</body>