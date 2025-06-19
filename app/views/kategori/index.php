  <div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg">
      <div class="p-4 text-lg font-semibold border-b">Kategori</div>
      <ul class="divide-y divide-gray-200">
        <?php foreach ($data['kategori'] as $kategori): ?>
          <a href="<?= BASEURL ?>/kategori/produk/<?= $kategori['id']; ?>">
            <li class="flex justify-between items-center p-4 hover:bg-gray-50 cursor-pointer">
              <div class="flex items-center gap-3 text-red-500">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 7h18M3 12h18M3 17h18" />
                </svg>
                <span class="text-gray-700"><?= $kategori['nama_kategori']; ?></span>
              </div>
              <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 5l7 7-7 7" />
              </svg>
            </li>
          </a>
        <?php endforeach; ?>
      </ul>
    </aside>

    <!-- Konten kanan -->
    <main class="flex-1 p-6">
      <h1 class="text-2xl font-bold text-gray-800 mb-4">Selamat datang di toko kami</h1>
      <p class="text-gray-600">Pilih kategori untuk melihat produk.</p>
    </main>
  </div>