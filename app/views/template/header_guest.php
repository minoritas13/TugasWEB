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
          <div class="w-px h-6 bg-gray-300"></div>
          <a href="#" class="text-gray-700 hover:text-gray-900 font-medium">Daftar</a>
          <a href="<?= BASEURL; ?>/dashboardKasir" class="text-gray-700 hover:text-gray-900 font-medium">Masuk</a>
        </div>

      </div>
    </div>
  </nav>