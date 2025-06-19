<head>
    <meta charset="UTF-8">
    <title><?= $data['title']; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<div class="max-w-6xl mx-auto mt-6 p-6 bg-white shadow rounded">
    <h1 class="text-xl font-bold mb-4 text-green-600"><?= $data['title']; ?></h1>
    <table class="w-full border text-sm">
        <thead class="bg-green-500 text-white">
            <tr>
                <th class="py-2 px-3 text-left">ID</th>
                <th class="py-2 px-3 text-left">Tanggal</th>
                <th class="py-2 px-3 text-left">Pelanggan</th>
                <th class="py-2 px-3 text-left">Pembeli</th>
                <th class="py-2 px-3 text-left">Total (Rp)</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <?php foreach ($data['transaksi'] as $t): ?>
                <tr class="border-t hover:bg-gray-50">
                    <td class="py-2 px-3"><?= $t['id']; ?></td>
                    <td class="py-2 px-3"><?= $t['tanggal']; ?></td>
                    <td class="py-2 px-3"><?= $t['pelanggan']; ?></td>
                    <td class="py-2 px-3"><?= $t['pembeli']; ?></td>
                    <td class="py-2 px-3">Rp <?= number_format($t['total'], 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<a href="<?= BASEURL; ?>" class="text-green-600 underline m-50">kembali</a>