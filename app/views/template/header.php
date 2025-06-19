<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $data['title']; ?></title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

  <nav class="bg-white shadow">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4">

        <!-- Logo -->
        <div class="flex-shrink-0">
          <a href="<?= BASEURL; ?>">
            <img class="h-8" src="<?= BASEURL; ?>/img/default.png" alt="Logo">
          </a>
        </div>

        <!-- Kategori -->
        <a href="<?= BASEURL ?>/kategori" class="text-gray-700 hover:text-gray-900 font-medium flex items-center gap-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
          Kategori
        </a>

        <!-- Search -->
        <form class="flex w-1/2 mx-4">
          <input type="search" class="flex-grow border border-gray-300 px-4 py-2 rounded-l-md focus:outline-none" placeholder="Temukan produk favoritmu disini" />
          <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-r-md hover:bg-green-700">
            🔍
          </button>
        </form>

        <!-- Right Side -->
        <div class="flex items-center gap-4">
          <a href="#" class="text-gray-700 hover:text-gray-900 font-medium">Promo</a>
          <a href="<?= BASEURL ?>/keranjang" class="text-gray-700 hover:text-gray-900">
            🛒
          </a>

          <div class="flex justify-end items-center px-6 py-4 bg-white relative text-black">
            <!-- Profile Dropdown Button -->
            <div id="dropdownBtn" class="flex items-center text-gray-600 ">
              <svg class="w-6 h-6 text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd" />
              </svg>
              <button class="p-2 flex items-center gap-2 font-semibold focus:outline-none">Nafis</button>
            </div>
            <div class="relative">
              <!-- Dropdown Menu -->
              <div id="dropdownMenu"
                class="absolute right-0 mt-2 w-64 bg-white rounded shadow-lg border border-gray-200 hidden z-50">
                <div class="p-4 border-b border-gray-200">
                  <div class="flex items-center gap-2">
                    <i class="fas fa-user text-gray-500 text-xl"></i>
                    <span class="font-semibold">Nafis</span>
                  </div>
                </div>
                <div class="p-4">
                  <form action="<?=BASEURL?>/logout" method="POST">
                    <button type="submit"
                      class="w-full border border-red-500 text-red-500 px-4 py-2 rounded hover:bg-red-50">
                      Keluar
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </nav>

  <script src="<?= BASEURL ?>/js/header.js"></script>