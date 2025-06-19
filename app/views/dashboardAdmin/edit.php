<head>
    <meta charset="UTF-8">
    <title><?= $data['title']; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<div class="max-w-xl mx-auto my-5 bg-white shadow p-6 mt-8 rounded">
    <h2 class="text-xl font-bold mb-4">Edit Barang</h2>
    <form action="<?= BASEURL; ?>/dashboardAdmin/edit/<?= $data['barang']['id']; ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['barang']['id']; ?>">
        <input type="hidden" name="gambar_lama" value="<?= $data['barang']['gambar']; ?>">

        <div class="mb-4">
            <label class="block mb-1 font-medium">Nama Barang</label>
            <input type="text" name="nama" value="<?= $data['barang']['nama']; ?>" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Harga</label>
            <input type="number" name="harga" value="<?= $data['barang']['harga']; ?>" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Stok</label>
            <input type="number" name="stok" value="<?= $data['barang']['stok']; ?>" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Ganti Gambar (opsional)</label>
            <input type="file" name="gambar" accept="image/*"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500" />
            <p class="text-sm text-gray-500 mt-1">Gambar saat ini: <?= basename($data['barang']['gambar']); ?></p>
            <img src="<?= BASEURL; ?>/<?= $data['barang']['gambar']; ?>" alt="Gambar Barang" class="mt-2 w-32 rounded shadow">
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Simpan Perubahan</button>
        <a href="<?= BASEURL; ?>/dashboardAdmin" class="ml-2 text-gray-500">Batal</a>
    </form>
</div>