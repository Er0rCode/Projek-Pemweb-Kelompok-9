
<body>
    <div id="produk">
        <div>
            <h2>Produk Kami</h2>
            <div class="produk-container">
                <?php foreach ($produk as $item): ?>
                    <?php if (!empty($item->gambar)): ?>
                        <div class="produk-card">
                            <div>
                                <img src="<?= base_url('assets/images/' . $item->gambar); ?>" alt="<?= $item->nama ?>">
                                <div class="produk-info">
                                    <h5><?= $item->nama ?></h5>
                                    <p>Rp. <?= number_format($item->harga, 0, ',', '.') ?></p>
                                    <p><?= $item->deskripsi ?></p>
                                    <p><strong>Kategori:</strong> <?= $item->kategori_nama ?></p>
                                </div>
                            </div>
                            <button onclick="window.location.href='https://wa.me/6281252040588'">
                                Pesan
                            </button>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </head>

    <body>