<div class="min-h-screen flex items-center justify-center bg-gray-100">
  <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Daftar Akun</h2>

    <form action="<?= BASEURL ?>/Register" method="POST">
      <div class="mb-4">
        <label class="block text-gray-700">Username</label>
        <input type="text" name="username" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:ring-green-300">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700">Password</label>
        <input type="password" name="password" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:ring-green-300">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700">Konfirmasi Password</label>
        <input type="password" name="password2" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:ring-green-300">
      </div>

      <button type="submit" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700 transition">
        Daftar
      </button>
    </form>

    <p class="mt-4 text-center text-sm text-gray-500">
      Sudah punya akun? <a href="<?= BASEURL ?>" class="text-green-600 hover:underline">Masuk</a>
    </p>
  </div>
</div>
