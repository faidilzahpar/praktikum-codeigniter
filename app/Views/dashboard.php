    <!-- Hero Section -->
    <div class="container text-center my-5" id="home">
      <h1 class="display-4">Selamat Datang di DigiMart</h1>
      <p class="lead">Platform terbaik untuk produk digital seperti e-book, template, dan kelas online.</p>
      <a href="#populer" class="btn btn-primary btn-lg">Jelajahi Sekarang</a>
    </div>

    <!-- Produk Section -->
    <div class="container my-5" id="populer">
    <h2 class="text-center mb-4">Produk Digital Terpopuler</h2>
    <div class="row g-4">
        <!-- Loop untuk menampilkan produk -->
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card" style="height: 480px;">
                    <div class="img-container" style="height: 280px; overflow: hidden;">
                        <!-- Gambar diambil dari path yang disimpan di database -->
                        <img src="<?= base_url($product['gambar']); ?>" class="card-img-top" alt="<?= $product['nama_produk']; ?>" style="width: 100%; height: 100%; object-fit: cover;" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['nama_produk']; ?></h5>
                        <p class="card-text" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; max-height: 3em; line-height: 1.5em; margin: 0;"><?= $product['deskripsi']; ?></p>
                        <h5 class="harga">Rp. <?= number_format($product['harga'], 0, ',', '.'); ?></h5>
                        <a href="#" class="btn btn-primary mt-2">Lihat Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>