<section class="py-6">
  <div class="max-w-7xl mx-auto px-4">
    <h2 class="text-red-600 mt-4 font-bold mb-4"><?= $data['kategori']['nama_kategori'];?></h2>
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
            <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded mt-2">Beli</button>
          </form>
        </div>
      <?php endforeach; ?>

</section>