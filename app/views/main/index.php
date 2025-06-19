<body class="bg-gray-100">
  <div class="mt-5"></div>

  <!-- Banner Section -->
  <section class="bg-white py-4">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 px-4">
      <img src="assets/cash.jpg" class="rounded-lg">
      <img src="assets/cash.jpg" class="rounded-lg">
      <img src="assets/cash.jpg" class="rounded-lg">
    </div>
  </section>

  <!-- jarak -->
  <div class="mt-5"></div>

  <!-- Kategori -->
  <section class="bg-white py-4">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex gap-4 overflow-x-auto whitespace-nowrap pb-2">
        <?php foreach ($data['kategori'] as $kategori): ?>
          <a href="<?= BASEURL ?>/kategori/produk/<?= $kategori['id']; ?>" class="bg-green-500 text-white px-4 py-2 rounded flex-shrink-0"><?= $kategori['nama_kategori']; ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Produk Rekomendasi -->
  <section class="py-6">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-red-600 mt-4 font-bold mb-4">Produk Rekomendasi</h2>
      <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
        <!-- Contoh produk -->
        <?php foreach ($data['barang'] as $barang): ?>
          <div class="bg-white p-3 rounded shadow text-center">
            <p class="text-sm"><?= $barang['nama']; ?></p>
            <p class="text-green-600 font-semibold">Rp <?= number_format($barang['harga'], 0, ',', '.'); ?></p>
            <form method="POST" action="<?= BASEURL ?>/keranjang">
              <input type="hidden" name="id" value="<?= $barang['id']; ?>">
              <input type="hidden" name="nama" value="<?= $barang['nama']; ?>">
              <input type="hidden" name="harga" value="<?= $barang['harga']; ?>">
              <img src="<?= BASEURL . '/' . $barang['gambar']; ?>" alt="Gambar Produk" class="rounded-lg">
              <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded mt-2">Beli</button>
            </form>
          </div>
        <?php endforeach; ?>

  </section>