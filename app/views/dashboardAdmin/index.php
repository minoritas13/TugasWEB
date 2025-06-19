<head>
    <meta charset="UTF-8">
    <title><?= $data['title']; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800"><?= $data['title']; ?></h1>

    <form method="POST" class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Filter Kategori:</label>
        <div class="flex gap-2 items-center">
            <select name="kategori_id" class="mt-1 block w-64 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                <option value="">-- Semua Kategori --</option>
                <?php foreach ($data['kategori'] as $kategori): ?>
                    <option value="<?= $kategori['id']; ?>" <?= ($kategori['id'] == $data['kategori_terpilih']) ? 'selected' : '' ?>>
                        <?= $kategori['nama_kategori']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Tampilkan</button>
        </div>
    </form>



    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-green-500 text-white">
                <tr>
                    <th class="px-4 py-3 text-left">ID</th>
                    <th class="px-4 py-3 text-left">Nama Barang</th>
                    <th class="px-4 py-3 text-left">Harga (Rp)</th>
                    <th class="px-4 py-3 text-left">Stok</th>
                    <th class="px-4 py-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <?php $no = 1; // Initialize a counter variable 
                ?>
                <?php foreach ($data['barang'] as $barang): ?>
                    <tr class="hover:bg-gray-50 border-t">
                        <td class="px-4 py-3"><?= $no++; ?></td>
                        <td class="px-4 py-3"><?= $barang['nama']; ?></td>
                        <td class="px-4 py-3"><?= number_format($barang['harga'], 0, ',', '.'); ?></td>
                        <td class="px-4 py-3"><?= $barang['stok']; ?></td>
                        <td class="px-4 py-3 flex gap-2">
                            <a href="<?= BASEURL ?>/dashboardAdmin/edit/<?= $barang['id']; ?>" class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Edit</a>
                            <form action="<?= BASEURL ?>/dashboardAdmin/edit" method="POST" onsubmit="return confirm('Yakin ingin hapus barang ini?');">
                                <input type="hidden" name="id" value="<?= $barang['id']; ?>">
                                <button type="submit" name="hapus" class="bg-red-500 text-white px-3 py-1 rounded text-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<div class="m-5">
    <a href="<?= BASEURL; ?>/logout" class="bg-sky-500 rounded p-2">Logout</a>
    <a href="<?= BASEURL; ?>/dashboardAdmin/tambah" class="bg-sky-500 rounded p-2">tambah</a>
</div>