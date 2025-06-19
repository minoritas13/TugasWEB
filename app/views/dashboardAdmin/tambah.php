<head>
    <meta charset="UTF-8">
    <title><?= $data['title']; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<div class="container mx-auto px-4 py-6">
    <h2 class="text-xl font-bold mb-4">Tambah Barang</h2>

    <form action="<?= BASEURL; ?>/dashboardAdmin/tambah" method="POST" enctype="multipart/form-data" class="space-y-4">
        <div>
            <label class="block mb-1">Nama Barang</label>
            <input type="text" name="nama" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block mb-1">Harga</label>
            <input type="number" name="harga" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block mb-1">Stok</label>
            <input type="number" name="stok" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Gambar (opsional)</label>
            <input type="file" name="gambar" accept="image/*"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500" />
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
        <a href="<?= BASEURL ?>" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Kembali</a>
    </form>
</div>