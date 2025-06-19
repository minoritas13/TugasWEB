<h2 class="text-xl font-bold mb-4">Keranjang Belanja</h2>

<table class="min-w-full bg-white border border-gray-300 table-fixed">
    <thead>
        <tr class="bg-gray-100">
            <th class="w-2/5 px-4 py-2 text-left">Nama</th>
            <th class="w-1/5 px-4 py-2 text-left">Harga</th>
            <th class="w-1/5 px-4 py-2 text-left">Jumlah</th>
            <th class="w-1/5 px-4 py-2 text-left">Subtotal</th>
            <th class="w-1/5 px-4 py-2 text-left">Aksi</th>

        </tr>
    </thead>
    <tbody>
        <?php $total = 0; ?>
        <?php foreach ($data['cart'] as $id => $item): ?>
            <?php
            $subtotal = $item['harga'] * $item['jumlah'];
            $total += $subtotal;
            ?>
            <tr class="border-t">
                <td class="px-4 py-2"><?= htmlspecialchars($item['nama']); ?></td>
                <td class="px-4 py-2">Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
                <td class="px-4 py-2"><?= $item['jumlah']; ?></td>
                <td class="px-4 py-2">Rp <?= number_format($subtotal, 0, ',', '.'); ?></td>
                <td class="px-4 py-2">
                    <form action="<?= BASEURL ?>/keranjang/hapusKeranjang" method="POST">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded text-sm">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr class="bg-gray-100 font-semibold">
            <td colspan="3" class="px-4 py-2 text-right">Total:</td>
            <td class="px-4 py-2">Rp <?= number_format($total, 0, ',', '.'); ?></td>
            <td></td>
        </tr>
    </tfoot>
</table>

<!-- Tombol Beli / Checkout -->
<!-- Checkout semua keranjang -->
<div class="m-4">
  <form action="<?= BASEURL ?>/keranjang/transaksi" method="POST">
    <button type="submit"
      class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded transition-all duration-200">
      <i class="fas fa-cart-plus mr-1"></i> Checkout Sekarang
    </button>
  </form>
</div>
